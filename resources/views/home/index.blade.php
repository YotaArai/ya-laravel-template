@extends('layouts.app')

@section('title')
<title>{{ config('app.name') }}
</title>
@endsection

@include('layouts.scripts')

@include('layouts.favicon')

@include('layouts.header')

@include('layouts.message')

@section('content')
<div class="description primary">
  @guest
  <v-container>
    <v-row>
      <v-col cols="12" sm="7" lg="6" offset-lg="1">
        <h2 class="text-h3">キャッチコピー</h2>
        <div class="text-body-2 my-6">
          <p>キャッチコピーの続き1</p>
          <p>キャッチコピーの続き2</p>
        </div>
        
      </v-col>
      <v-col cols="5" lg="4" class="d-none d-sm-inline">
        <h3 class="text-h5 text-center mb-4">ログイン</h3>
        <login-buttons></login-buttons>
      </v-col>
    </v-row>
  </v-container>
  @endguest
</div>
<v-container>
</v-container>
@endsection

@include('layouts.footer')