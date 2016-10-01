<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Starter Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ URL::asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ URL::asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>


<!-- barra de navegacion -->
<nav class="orange darken-4" role="navigation">
    <div class="nav-wrapper container">
        <ul class="left hide-on-med-only">
            <li><a href="{{url('/')}}"><i class="material-icons">clear</i></a></li>
        </ul>
        <a id="logo-container" href="#" class="brand-logo center">WebApp</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{url('search')}}"><i class="material-icons">search</i></a></li>

        </ul>
    </div>

</nav>

<!-- termina barra de navegacion -->

<!-- Tarjetas -->
<section>

    <div class="container ">
        <div class="row "> <!-- inicia row-->
            <div class="col s12 m6">

                <div class="card z-depth-3">

                    <div class="card-image">
                        <img src="{{URL::asset('img/caldos.png')}}">
                        <span class="card-title">Caldos</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="{{url("caldos")}}" >Ver recetas</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card z-depth-3">
                    <div class="card-image">
                        <img src="{{URL::asset('img/tamales.png')}}">
                        <span class="card-title">Tamales</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="{{url("tamales")}}" >Ver recetas</a>
                    </div>
                </div>

            </div>
            <div class="col s12 m6">
                <div class="card z-depth-3">
                    <div class="card-image">
                        <img src="{{URL::asset('img/postres.png')}}">
                        <span class="card-title">Postres</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="{{url("postres")}}" >Ver recetas</a>
                    </div>
                </div>

            </div>
            <div class="col s12 m6">
                <div class="card z-depth-3">
                    <div class="card-image">
                        <img src="{{URL::asset('img/bebidas.png')}}">
                        <span class="card-title">Bebidas Tipicas</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="{{url("bebidas")}}" >Ver recetas</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m12">
                <div class="card z-depth-3">
                    <div class="card-image">
                        <img src="{{URL::asset('img/kitchenuser.png')}}">
                        <span class="card-title">Cocina Del Usuario</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="{{url("cocinausuario")}}" >Ver recetas</a>
                    </div>
                </div>

            </div>

        </div> <!-- finaliza row -->
    </div>

</section>


<!-- fin Tarjetas -->


<!-- footer -->


<footer class="grey darken-2">
    <div class="container">
        <div class="row">
            <div class="col 16 s12">
                <h4 class="white-text center">ElCaldo</h4>
                <p class="grey-text text-lighten-4 center">Sabor a eterna primavera.</p>
                <p class="grey-text text-lighten-4 center"> Para mas información: </p>
                <p class="grey-text text-lighten-4 center">info@elcaldogt.com</p>
            </div>
        </div>

        <div class="center">
            <img src="{{ URL::asset('img/icon_playstore_black_min.png') }}">
        </div>

        <div class="footer-copyright center">
            <div class="white-text">
                © 2016 Copyright elcaldo, All rights reserved.
            </div>
        </div>
    </div>
</footer>


<!-- termina foot!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{ URL::asset('js/materialize.js') }}"></script>
<script src="{{ URL::asset('js/init.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.parallax').parallax();
        $('.slider').slider({full_width: true});
    });

</script>
<!-- terminar Scripts -->


</body>
</html>
