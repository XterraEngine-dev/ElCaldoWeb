<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>ElCaldo</title>

    <!-- CSS  -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!-- Material Design Bootstrap -->
    <link href="{{ URL::asset('css/mdb.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!-- Your custom styles (optional) -->
    <link href="{{ URL::asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!-- /CSS -->


</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-dark orange darken-4">

    <!-- Collapse button-->
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
        <i class="fa fa-bars"></i>
    </button>

    <div class="container">

        <!--Collapse content-->
        <div class="collapse navbar-toggleable-xs" id="collapseEx2">
            <!--Navbar Brand-->
            <a class="navbar-brand white-text" href="/">ElCaldo</a>
            <!--Links-->
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/app">Recetas <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"></a>
                </li>

            </ul>

        </div>
        <!--/.Collapse content-->

    </div>

</nav>
<!--/.Navbar-->

<br>
<br>
<!-- LLENADO DE DATA-->
<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>
<!-- LLENADO DE DATA -->


<!--Footer-->
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-3 col-md-offset-1">
                <h5 class="title">Footer Content</h5>
                <p>Here you can use rows and columns here to organize your footer content.</p>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-md-2 col-md-offset-1">
                <h5 class="title">Links</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title">Links</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title">Links</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Call to action-->
    <div class="call-to-action">
        <ul>
            <li>
                <h5>Register for free</h5></li>
            <li><a href="" class="btn btn-danger">Sign up!</a></li>
        </ul>
    </div>
    <!--/.Call to action-->

    <hr>

    <!--Social buttons-->
    <div class="social-section">
        <ul>
            <li><a class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
            <li><a class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
            <li><a class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
            <li><a class="btn-floating btn-small btn-li"><i class="fa fa-linkedin"> </i></a></li>
            <li><a class="btn-floating btn-small btn-git"><i class="fa fa-github"> </i></a></li>
            <li><a class="btn-floating btn-small btn-pin"><i class="fa fa-pinterest"> </i></a></li>
            <li><a class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a></li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2016 Copyright: <a href="http://info.elcaldogt.com"> ElCaldogt.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->

<!-- JQuery -->
<script src="{{ URL::asset('js/jquery-2.2.3.min.js') }}"></script>

<!-- Bootstrap tooltips -->
<script src="{{ URL::asset('js/tether.min.js') }}"></script>

<!-- MDB core JavaScript -->
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

<!-- Bootstrap tooltips -->
<script src="{{ URL::asset('js/mdb.min.js') }}"></script>


</body>
</html>
