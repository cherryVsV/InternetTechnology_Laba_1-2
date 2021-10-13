@extends('layouts.layouts')
@section('title')
    Карточка товара пустая
@endsection
@section('head-js')
    <script defer src="{{ asset('js/card2.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/card2.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-card2 :auth_user='{!! json_encode($profile) !!}'></page-card2>
@endsection
