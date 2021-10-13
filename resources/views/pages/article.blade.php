@extends('layouts.layouts')
@section('title')
    Статья
@endsection
@section('head-js')
    <script defer src="{{ asset('js/article.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/article.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-article :auth_user='{!! json_encode($profile) !!}'></page-article>
@endsection
