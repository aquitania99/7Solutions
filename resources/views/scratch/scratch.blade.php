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

            @if(!empty($test) )
                {{ dd( json_decode($test) ) }}

                @foreach(json_decode($test) as $key => $row)
                    <tr class="row col-md-6">
                    <td>{{$key}}</td>
                    <td>{{$row}}</td>
                    <td>
                    <a href="#">Complete</a> | <a href="#">Edit</a> | <a href="#">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                @endforeach
            @endif
            @include('components.footer')
        </div>
    </div>
@endsection

@section('extraJs')
    <script type="text/javascript" src="{{asset('assets/js/pages/dashboard.js')}}"></script>
    @endsection