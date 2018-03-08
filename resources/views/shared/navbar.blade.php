<style>

    .navbar-brand,
    .navbar-nav li a {
        line-height: 80px;
        height: 80px;
        padding-top: 0;
    }
    .navbar-nav li a:hover {
        background-color: whitesmoke !important;
        color: grey !important;
    }

    .nav a{
        color: black !important;
        font-size: 1.8em !important;
    }
    .navbar-brand {
        color:#ff0000 !important;;
        font-size:25px;
        font-family: "Microsoft YaHei UI Light";
        font-weight: bold;
    }

</style>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">RMIT Service & Support</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                {{--<li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>--}}
                <li><a href="http://localhost/WDA-A2/public/">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="http://localhost/WDA-A2/public/FAQ">FAQ</a></li>

                @if(!\Illuminate\Support\Facades\Auth::guest())
                    <li><a href="http://localhost/WDA-A2/public/ticket/create">Request a Service</a></li>
                    <li><a href="http://localhost/WDA-A2/public/track">Track Progress</a></li>
                    <li><a href="http://localhost/WDA-A2/public/its">View</a></li>
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
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




        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>