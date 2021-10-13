@extends('layouts.layouts')
@section('title')
    Содержание
@endsection
@section('head-js')
    <script defer src="{{ asset('js/content.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/content.css') }}" rel="stylesheet">
@endsection
@section('style-body')
    class="body-min"
@endsection
@section('content')
    <page-content :auth_user='{!! json_encode($profile) !!}'></page-content>
@endsection
