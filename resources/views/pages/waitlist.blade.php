@extends('layouts.layouts')
@section('title')
    Лист ожидания
@endsection
@section('head-js')
    <script defer src="{{ asset('js/waitlist.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/waitlist.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-wait-list :auth_user='{!! json_encode($profile) !!}'></page-wait-list>
@endsection
