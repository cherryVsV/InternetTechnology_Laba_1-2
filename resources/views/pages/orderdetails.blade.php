@extends('layouts.layouts')
@section('title')
    Заказ подробности
@endsection
@section('head-js')
    <script defer src="{{ asset('js/orderdetails.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/orderdetails.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-order-list :auth_user='{!! json_encode($profile) !!}'></page-order-list>
@endsection
