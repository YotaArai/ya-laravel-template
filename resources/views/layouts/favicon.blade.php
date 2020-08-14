@section('favicon')
{{-- 以下のサイトで作成 --}}
{{-- https://realfavicongenerator.net/ --}}
<link rel="apple-touch-icon" sizes="180x180" href="{{ secure_asset('favicon/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ secure_asset('favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ secure_asset('favicon/favicon-16x16.png') }}">
<link rel="manifest" href="{{ secure_asset('favicon/site.webmanifest') }}">
<link rel="mask-icon" href="{{ secure_asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
@endsection