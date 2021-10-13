@extends('layouts.layouts')
@section('title')
    Гарантия и возврат
@endsection
@section('head-js')
    <script defer src="{{ asset('js/warranty.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/warranty.css') }}" rel="stylesheet">
@endsection
@section('style-body')
    class="body-service"
@endsection
@section('content')
    <page-warranty :auth_user='{!! json_encode($profile) !!}'></page-warranty>
@endsection
