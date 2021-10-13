@extends('layouts.layouts')
@section('title')
    О нас
@endsection
@section('head-js')
    <script defer src="{{ asset('js/about.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-about :auth_user='{!! json_encode($profile) !!}'></page-about>
@endsection
