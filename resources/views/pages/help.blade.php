@extends('layouts.layouts')
@section('title')
    Помощь главная
@endsection
@section('head-js')
    <script defer src="{{ asset('js/help.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/help.css') }}" rel="stylesheet">
@endsection
@section('style-body')
    class="body-service"
@endsection
@section('content')
    <page-help :auth_user='{!! json_encode($profile) !!}'></page-help>
@endsection
