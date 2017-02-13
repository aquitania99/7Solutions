
@extends('layouts.app')

@section('mainNavBar')
    @include('components.main-navbar')
@endsection

@section('content')
    @include('components.side-navbar')
    <div class="content-wrapper">
        @include('components.pageHeader')
        <div class="content">
            <div class="row">
                @yield('content-row')
            </div>
            <div class="row">
                @include('components.footer')
            </div>
        </div>
    </div>
@endsection

@section('extraJs')
    @parent
    <script type="text/javascript" src="{{asset('assets/js/pages/dashboard.js')}}"></script>
@endsection