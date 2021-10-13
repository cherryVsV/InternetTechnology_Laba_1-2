@extends('layouts.layouts')
@section('title')
    Обзоры
@endsection
@section('head-js')
    <script defer src="{{ asset('js/review2.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/review2.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-review2 :auth_user='{!! json_encode($profile) !!}'></page-review2>
@endsection
