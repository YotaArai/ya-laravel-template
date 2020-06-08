@section('header')
<original-header
  :user="{{ json_encode(Auth::user()) }}"
  :path="{{json_encode(request()->path()) }}"  
></original-header>
@endsection