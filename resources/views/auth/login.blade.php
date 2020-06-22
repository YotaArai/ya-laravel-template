@extends('layouts.app')

@section('title')
<title>ログイン | {{ config('app.name') }}
</title>
@endsection

@include('layouts.favicon')

@include('layouts.header')

@include('layouts.message')

@section('content')
<v-container>
  <h2 class="text-h4 text-center my-6">ログイン</h2>
  <login-buttons></login-buttons>
</v-container>
@endsection

@include('layouts.footer')