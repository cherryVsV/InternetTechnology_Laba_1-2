@extends('layouts.layouts')
@section('title')
    Личный кабинет
@endsection
@section('head-js')
    <script defer src="{{ asset('js/lk.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/lk.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-lk :auth_user='{!! json_encode($profile) !!}'></page-lk>
@endsection
