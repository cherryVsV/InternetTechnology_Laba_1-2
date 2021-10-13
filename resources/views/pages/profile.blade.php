@extends('layouts.layouts')
@section('title')
    Личные данные
@endsection
@section('head-js')
    <script defer src="{{ asset('js/profile.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-profile :auth_user='{!! json_encode($profile) !!}'></page-profile>
@endsection
