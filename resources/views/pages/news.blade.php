@extends('layouts.layouts')
@section('title')
    Новости
@endsection
@section('head-js')
    <script defer src="{{ asset('js/news.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/news.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-news :auth_user='{!! json_encode($profile) !!}'></page-news>
@endsection
