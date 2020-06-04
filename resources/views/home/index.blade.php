@extends('layouts.app')

@section('title')
<title>{{ config('app.name') }}
</title>
@endsection

@include('layouts.favicon')

@include('layouts.header')

@include('layouts.message')

@section('content')
<div>
  <h2>ホーム画面</h2>
</div>
@endsection

@include('layouts.footer')