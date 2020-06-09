@section('header')
<original-header
  :user="{{ json_encode(Auth::user()) }}"
  :path="{{ json_encode(request()->path()) }}"  
  :logo-src="{{ json_encode(secure_asset('images/logo.svg')) }}"
></original-header>
@endsection