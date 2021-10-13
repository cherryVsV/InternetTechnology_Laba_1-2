@extends('layouts.layouts')
@section('title')
    Каталог общий
@endsection
@section('head-js')
    <script defer src="{{ asset('js/catalogmain.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/catalogmain.css') }}" rel="stylesheet">
@endsection
@section('style-body')
    class="parent"
@endsection
@section('content')
    <page-catalog-main :auth_user='{!! json_encode($profile) !!}'
    :categories = '{!! json_encode($categories) !!}'></page-catalog-main>
@endsection
