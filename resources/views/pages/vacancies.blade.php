@extends('layouts.layouts')
@section('title')
    Вакансии
@endsection
@section('head-js')
    <script defer src="{{ asset('js/vacancies.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/vacancies.css') }}" rel="stylesheet">
@endsection
@section('style-body')
    class="body-min"
@endsection
@section('content')
    <page-vacancies :auth_user='{!! json_encode($profile) !!}'></page-vacancies>
@endsection
