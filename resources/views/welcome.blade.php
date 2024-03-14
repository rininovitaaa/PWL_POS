@extends('layout.app')

{{-- customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_title', 'Welcome')

{{-- Content body: main page content --}}

@section('content_body')
    <p>Welcome to this beautiful admin panel.</p>
    @stop

{{-- Push extra CSS --}}

@section('css')
        {{-- Add here extra stylesheets --}}
        {{-- <link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

{{-- Push extra scripts --}}

@section('js')
    <script> console.log("Hi, I'm using Laravel-AdminLTE package!"); </script>
@stop