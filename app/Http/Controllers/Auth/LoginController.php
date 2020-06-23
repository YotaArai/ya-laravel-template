<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * ログアウト
     */
    public function logout()
    {
        \Auth::logout();
        return redirect('/');
    }

    /**
     * ログインページ
     */
    public function login()
    {
        $intended = '/';
        if(isset($_SERVER['HTTP_REFERER'])) {
            $intended = $_SERVER['HTTP_REFERER'];
        }
        session(['url.intended' => $intended]);

        return view('auth/login');
    }

    /**
     * ソーシャルログイン　リダイレクト
     */
    public function redirectToProvider($social)
    {
        return Socialite::driver($social)->redirect();
    }

    /**
     * ソーシャルログイン コールバック
     */
    public function handleProviderCallback($social)
    {
        try{
            $user = Socialite::driver($social)->user(); 
        }catch(Exception $e){
            return redirect('/')->withErrors(['error_message' => 'ログインでエラーが発生いたしました']);
        }
        $socialType = array_search($social, config('services.social_type'));
        $auth_user = $this->findOrCreate($socialType, $user);
        
        $message_type = 'warning_message';
        $message_text = 'ログインできません。お手数おかけしますが、運営へ問い合わせください。';
        if($auth_user->active || is_null($auth_user->active)){
            \Auth::login($auth_user, true);
            $message_type = 'success_message';
            $message_text = 'ログインしました';
        }
        
        return redirect(session('url.intended', '/'))->with($message_type, $message_text);
    }

    protected function findOrCreate(string $socialType, $user_info)
    {
        $user = User::where('login_id', "$socialType{$user_info->id}")->first();

        $userName = $user_info->name;

        if(!$user){
            // 存在しなければ新規登録
            $user = new User();
            $user->name = $userName;
            $user->login_id = "$socialType{$user_info->id}";
            $user->social_avatar = $this->changeHttpToHttps($user_info->avatar_original);
            $user->save();
        }else{
            // ユーザー情報更新
            $user->social_avatar = $this->changeHttpToHttps($user_info->avatar_original);
            $user->save();
        }

        return $user;
    }

    protected function changeHttpToHttps($url){
        if(substr($url, 0, 7) == 'http://'){
            $url = substr_replace($url, 'https', 0, 4);
        }
        return $url;
    }
}
