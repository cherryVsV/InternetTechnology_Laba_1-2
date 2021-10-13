@extends('layouts.layouts')
@section('title')
    Обзоры
@endsection
@section('head-js')
    <script defer src="{{ asset('js/review.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/review.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-review :auth_user='{!! json_encode($profile) !!}'></page-review>
@endsection
