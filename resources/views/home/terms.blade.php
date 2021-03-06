@extends('layouts.app')

@section('title')
<title>利用規約 | {{ config('app.name') }}
</title>
@endsection

@include('layouts.scripts')

@include('layouts.favicon')

@include('layouts.header')

@include('layouts.message')

@section('content')
<v-container>
  <v-row>
    <v-col cols="12" md="8" offset-md="2" lg="6" offset-lg="3">
      <div>
        <h2 class="text-h4 text-center my-8">利用規約</h2>
      </div>
      <div>
        <p></p>
        <p></p>
      </div>
    </v-col>
  </v-row>
</v-container>
@endsection

@include('layouts.footer')