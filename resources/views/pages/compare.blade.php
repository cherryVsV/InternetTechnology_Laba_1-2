@extends('layouts.layouts')
@section('title')
    Сравнение
@endsection
@section('head-js')
    <script defer src="{{ asset('js/compare.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/compare.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-compare :auth_user='{!! json_encode($profile) !!}'></page-compare>
@endsection
