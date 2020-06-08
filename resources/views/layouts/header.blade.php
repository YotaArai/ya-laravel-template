@section('header')
{{-- <v-app-bar dark color="#212121" flat app>
    <a href="{{ url('/') }}" class="header-logo">
        <img class="header-logo__img" src="{{ secure_asset('images/logo.svg') }}" alt="fes-maker-logo">
    </a>
    <v-spacer></v-spacer>
    @if(Auth::check())
    @if(request()->path() !== 'create')
    <div class="d-none d-sm-flex mr-3">
        <v-btn href="{{ url('create') }}">
            <span class="emoir-kaku">フェスを開催する</span>
            <v-icon class="ml-2" small>fas fa-plus-square</v-icon>
        </v-btn>
    </div>
    @endif
    <v-menu left bottom>
        <template v-slot:activator="{ on }">
            <v-toolbar-title v-on="on" class="pointing">
                <v-avatar size="36px">
                    <img src="{{ Auth::user()->set_avatar() }}" id="header-avatar" alt="Avatar">
                </v-avatar>
            </v-toolbar-title>
        </template>

        <v-list>
            @if(request()->path() !== 'create')
            <div class="d-flex d-sm-none">
                <v-list-item href="{{ url('create') }}">
                    <v-list-item-title>フェスを開催する</v-list-item-title>
                </v-list-item>
            </div>
            @endif
            <v-list-item href="{{ url('logout') }}">
                <v-list-item-title>ログアウト</v-list-item-title>
            </v-list-item>
        </v-list>
    </v-menu>
    @else
    @if(request()->path() !== 'login')
    <v-btn href="{{ url('login') }}">
        <span class="emoir-kaku">ログイン</span>
        <v-icon class="ml-2" small>fas fa-sign-in-alt</v-icon>
    </v-btn>
    @endif
    @endif
</v-app-bar> --}}
@endsection