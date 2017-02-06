@extends('layouts.app')

@section('title', 'Page Title')

@section('headerCSS')
    @parent
    @endsection

@section('mainNavBar')
    @include('components.main-navbar')
@endsection

@section('content')
    @include('components.side-navbar')
    <div class="content-wrapper">
        @include('components.pageHeader')
        <div class="row">
            @include('components.footer')
        </div>
    </div>
@endsection

@section('extraJs')
    <script type="text/javascript" src="{{asset('assets/js/pages/dashboard.js')}}"></script>
    @endsection