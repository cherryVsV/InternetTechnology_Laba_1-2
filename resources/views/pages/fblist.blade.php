@extends('layouts.layouts')
@section('title')
    Мои отзывы
@endsection
@section('head-js')
    <script defer src="{{ asset('js/fblist.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/fblist.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-fblist :auth_user='{!! json_encode($profile) !!}'></page-fblist>
@endsection
