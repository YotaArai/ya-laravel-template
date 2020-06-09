<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- meta -->
    @yield('meta')

    <!-- title -->
    @yield('title')

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">

    <!-- scripts -->
    @yield('scripts')

    <!-- favicon -->
    @yield('favicon')
  </head>
  <body>
    <v-app id="app">
      @yield('header')
      @yield('message')
      <v-content>
        <v-container fluid>
          @yield('content')
        </v-container>
      </v-content>
      @yield('footer')
    </v-app>
  </body>
</html>
