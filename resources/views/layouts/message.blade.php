@section('message')
<template>
    @if(Session::has('success_message'))
    <alert type="success" message="{{ Session::get('success_message') }}"></alert>
    @endif
    @if(Session::has('info_message'))
    <alert type="info" message="{{ Session::get('info_message') }}"></alert>
    @endif
    @if(Session::has('warning_message'))
    <alert type="warning" message="{{ Session::get('warning_message') }}"></alert>
    @endif
    @if($errors->has('error_message'))
    <alert type="error" message="{{ $errors->first('error_message') }}"></alert>
    @endif
</template>
@endsection