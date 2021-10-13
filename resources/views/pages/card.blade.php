@extends('layouts.layouts')
@section('title')
    Карточка товара
@endsection
@section('head-js')
    <script defer src="{{ asset('js/card.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/card.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-card :auth_user='{!! json_encode($profile) !!}'></page-card>
@endsection
