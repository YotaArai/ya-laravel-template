<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'terms', 'privacy']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home/index');
    }

    /**
     * 利用規約ページ
     */
    public function terms()
    {
        return view('home/terms');
    }

    /**
     * プライバシーポリシーページ
     */
    public function privacy()
    {
        return view('home/privacy');
    }
}
