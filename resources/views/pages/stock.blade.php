@extends('layouts.layouts')
@section('title')
    Акции
@endsection
@section('head-js')
    <script defer src="{{ asset('js/stock.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/stock.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-stock :auth_user='{!! json_encode($profile) !!}'></page-stock>
@endsection
