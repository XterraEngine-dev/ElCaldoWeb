@extends('layout.principal')
@section('content')


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
                        <a href="{{url("timeline")}}" >Ver recetas</a>
                    </div>
                </div>

            </div>

        </div> <!-- finaliza row -->
    </div>

</section>


<!-- fin Tarjetas -->





@stop