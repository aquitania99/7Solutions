<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{url('/dashboard')}}"><img src="{{asset('images/logo_light.png')}}" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>

        <p class="navbar-text"><span class="label bg-success">Online</span></p>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown language-switch">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('images/flags/gb.png')}}" class="position-left" alt="">
                    English
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li><a class="english"><img src="{{asset('images/flags/gb.png')}}" alt=""> English</a></li>
                    <li><a class="espana"><img src="{{asset('images/flags/es.png')}}" alt=""> Español</a></li>
                    {{--<li><a class="deutsch"><img src="{{asset('images/flags/de.png')}}" alt=""> Deutsch</a></li>--}}
                </ul>
            </li>

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('images/placeholder.jpg')}}" alt="">
                    {{--<span>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>--}}
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    {{--<li><a href="{{'/profile/'.Auth::user()->id}}"><i class="icon-user-plus"></i> My profile</a></li>--}}
                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                    <li><a href="{{ url('/logout') }}"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->