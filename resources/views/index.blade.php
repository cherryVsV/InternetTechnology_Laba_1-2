@extends('layouts.layouts')
@section('title')
    Главная
@endsection
@section('head-js')
    <script defer src="{{ asset('js/index.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endsection
@section('style-body')
    class="body-main"
@endsection
@section('content')
    <page-index :auth_user='{!! json_encode($profile) !!}'></page-index>
@endsection
