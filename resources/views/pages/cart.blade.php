@extends('layouts.layouts')
@section('title')
    Корзина
@endsection
@section('head-js')
    <script defer src="{{ asset('js/cart.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-cart :auth_user='{!! json_encode($profile) !!}'></page-cart>
@endsection
