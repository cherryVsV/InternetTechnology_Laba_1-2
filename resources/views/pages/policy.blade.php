@extends('layouts.layouts')
@section('title')
    Политика конфиденциальности
@endsection
@section('head-js')
    <script defer src="{{ asset('js/policy.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/policy.css') }}" rel="stylesheet">
@endsection
@section('style-body')
    class="body-service"
@endsection
@section('content')
    <page-policy :auth_user='{!! json_encode($profile) !!}'></page-policy>
@endsection
