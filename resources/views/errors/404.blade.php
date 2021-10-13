@extends('layouts.layouts')
@section('title')
    Страница не найдена
@endsection
@section('head-js')
    <script defer src="{{ asset('js/404.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/404.css') }}" rel="stylesheet">
@endsection
@section('style-body')
    class="body-min"
@endsection
@section('content')
    <page-not-found></page-not-found>
@endsection
