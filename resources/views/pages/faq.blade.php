@extends('layouts.layouts')
@section('title')
    Вопросы и ответы
@endsection
@section('head-js')
    <script defer src="{{ asset('js/faq.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/faq.css') }}" rel="stylesheet">
@endsection
@section('style-body')
    class="body-service"
@endsection
@section('content')
    <page-faq :auth_user='{!! json_encode($profile) !!}'></page-faq>
@endsection
