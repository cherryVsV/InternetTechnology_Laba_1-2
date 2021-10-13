@extends('layouts.layouts')
@section('title')
    Оформление заказа
@endsection
@section('head-js')
    <script defer src="{{ asset('js/cart1.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/cart1.css') }}" rel="stylesheet">
@endsection
@section('style-body')
    class="body-min"
@endsection
@section('content')
    <page-cart1 :auth_user='{!! json_encode($profile) !!}' :payments='{!! json_encode($payments) !!}'></page-cart1>
@endsection
