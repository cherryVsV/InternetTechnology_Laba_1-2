@extends('layouts.layouts')
@section('title')
    Избранное
@endsection
@section('head-js')
    <script defer src="{{ asset('js/favorite.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/favorite.css') }}" rel="stylesheet">
@endsection
@section('content')
    <page-favorite :auth_user='{!! json_encode($profile) !!}'></page-favorite>
@endsection
