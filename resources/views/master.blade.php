<html>
<head>

    <title>@yield('title')</title>
    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/lity.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }
    </style>
</head>


<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">My DemoProject</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                {{--<li>
                    <a href="http://localhost-bhavika/Demoo/public/home">Home</a>
                </li>--}}
                <li>
                    <a href="#">Contact</a>

                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                        </ul>
                    </li>
                @endif
                @if(Auth::check())
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-lg-12 text-center">
            <h1> </h1>
            <p class="lead"> </p>
            <ul class="list-unstyled">
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- jQuery Version 1.11.1 -->

<script src="{{ url('js/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ url('js/bootstrap.min.js') }}"></script>
{{--<script src="{{ url('js/dropzone.js') }}"></script>--}}

<body>

{{--
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
--}}


<div>
    @yield('content')
</div>
</body>

</body>
</html>