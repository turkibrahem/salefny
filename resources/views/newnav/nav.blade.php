{{--<!-- Navigation -->--}}

{{--<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation" style="background-color:#0c01209d; border:#0c01209d">--}}
    {{--<div class="container topnav">--}}
        {{--<!-- Brand and toggle get grouped for better mobile display -->--}}
        {{--<div class="navbar-header" >--}}
            {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}


            {{--<!-- Branding Image -->--}}
            {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                {{--<img src="front/images/logopages.png">--}}
            {{--</a>--}}
        {{--</div>--}}

        {{--<div class="collapse navbar-collapse" id="app-navbar-collapse" style="margin-top:20px; " >--}}
            {{--<!-- Left Side Of Navbar -->--}}
            {{--<ul class="nav navbar-nav">--}}
                {{--<li ><a href="/" style="color: white ;">Home</a></li>--}}
                {{--<li><a href="/about" style="color: white ;">Services1</a></li>--}}
                {{--<li><a href="/about" style="color: white ;">Services2</a></li>--}}
                {{--<li><a href="/about" style="color: white ;">About</a></li>--}}
                {{--<li><a href="/posts" style="color: white ;">Posts</a></li>--}}
                {{--<li><a href="/posts/create"  style="color: white ;">Create post</a></li>--}}
            {{--</ul>--}}

            {{--<!-- Right Side Of Navbar -->--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<!-- Authentication Links -->--}}
                {{--@if (Auth::guest())--}}
                    {{--<li><a href="{{ route('login') }}" style="color: white ;">Login</a></li>--}}
                    {{--<li><a href="{{ route('register') }}" style="color: white ;">Register</a></li>--}}
                {{--@else--}}
                    {{--<li class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                            {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                        {{--</a>--}}

                        {{--<ul class="dropdown-menu" role="menu">--}}

                            {{--<li><a href="/dashboard">Dashboard</a></li>--}}
                            {{--<li>--}}
                                {{--<a href="{{ route('logout') }}"--}}
                                   {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                    {{--Logout--}}
                                {{--</a>--}}

                                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                    {{--{{ csrf_field() }}--}}
                                {{--</form>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--@endif--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}
<!----------------------------------------------------------------------    Orginal--->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation" style="background-color:#0c01209d; border:#0c01209d">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <li style="list-style: none;">
                <a class="navbar-brand topnav" href="#">
                    <img src="front/images/logopages.png">  </a> </li>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">


                <ul class="nav navbar-nav " style="margin-top:20px; ">
                    @if (Auth::guest())

                            <li ><a href="/salefny/public/" style="color: white ;">Home</a></li>
                            <li><a href="/salefny/public/service" style="color: white ;">Services1</a></li>
                            <li><a href="/salefny/public/service2" style="color: white ;">Services2</a></li>
                            <li><a href="/salefny/public/about" style="color: white ;">About</a></li>
                            <li><a href="{{ url('posts') }}" style="color: white ;">Posts</a></li>
                            <li><a href="/salefny/public/posts/create"  style="color: white ;">Create post</a></li>

                        <li><a href="{{ route('login') }}" style="color: white ;">Login</a></li>
                        <li><a href="{{ route('register') }}" style="color: white ;">Register</a></li>

                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">

                                <li><a href="/salefny/public//dashboard">Dashboard</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>


</ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!---------------------->
