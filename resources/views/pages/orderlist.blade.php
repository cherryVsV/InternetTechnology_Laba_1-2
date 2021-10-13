@extends('layouts.layouts')
@section('title')
    Мои заказы
@endsection
@section('head-js')
    <script defer src="{{ asset('js/orderlist.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/orderlist.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-order-details :auth_user='{!! json_encode($profile) !!}'></page-order-details>
@endsection
