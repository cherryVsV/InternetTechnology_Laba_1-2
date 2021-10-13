@extends('layouts.layouts')
@section('title')
    Акции-2
@endsection
@section('head-js')
    <script defer src="{{ asset('js/stock2.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/stock2.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-stock2 :auth_user='{!! json_encode($profile) !!}'></page-stock2>
@endsection
