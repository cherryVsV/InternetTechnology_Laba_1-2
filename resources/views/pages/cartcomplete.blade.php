@extends('layouts.layouts')
@section('title')
    Заказ оформлен
@endsection
@section('head-js')
    <script defer src="{{ asset('js/cartcomplete.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/cartcomplete.css') }}" rel="stylesheet">
@endsection
@section('style-body')
    class="body-min"
@endsection
@section('content')
    <page-cart-complete :auth_user='{!! json_encode($profile) !!}' :order='{!! json_encode($order) !!}'></page-cart-complete>
@endsection
