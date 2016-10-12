@extends('layout.recetas')
@section('content')

    @foreach($posts as $post)
        <div class="col-sm-4">

            <!--Card-->
            <div class="card card-cascade wider">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="http://mdbootstrap.com/images/ecommerce/reg/reg%20%285%29.jpg" class="img-fluid" alt="">
                    <a href="{{route('bebidas_show_path', $post->id)}}">
                        <div class="mask"></div>
                    </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block text-xs-center">
                    <!--Category & Title-->

                    <h4 class="card-title"><strong><a href="">{{ $post-> nombre }}</a></strong></h4>

                    <!--Description-->
                    <p class="card-text">{{ $post->region }}
                    </p>

                    <!--Card footer-->
                    <div class="card-footer">
                        <a href="{{route('bebidas_show_path', $post->id)}}">ver mas</a>

                    </div>

                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
        </div>
    @endforeach


@stop