<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="{{ URL::asset('img/caldoicon.ico') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>ElCaldo</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ URL::asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ URL::asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>

@yield('content')


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

<!-- Termina footer -->

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
