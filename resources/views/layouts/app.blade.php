<html>
    <head>
        <title>App Name - @yield('title')</title>
        <!-- Global stylesheets -->
        {{--<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">--}}
        <link rel="stylesheet" href="{{ elixir('css/less.css') }}">
        @yield('headerCSS')
    </head>
    <body>
    @yield('mainNavBar')
        {{--@section('sidebar')--}}
            {{--This is the master sidebar.--}}
        {{--@show--}}

        <div class="page-container">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        <!-- Core JS files -->
        <script type="text/javascript" src="{{asset('assets/js/plugins/loaders/pace.min.js')}}"></script>
        <script type="text/javascript" src="{{ elixir('js/all.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/js/plugins/loaders/blockui.min.js')}}"></script>
        <!-- /core JS files -->
        @yield('extraJs')
    </body>
</html>