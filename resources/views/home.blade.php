@extends('layout.app')

@section('title', 'Home')

@section('content')
    <div class="position-block">
        <div id="map_interactive"></div>

        <div id="rightForm">
            <br>
            <hr>
            <a class="nav-link" style="margin: 0; padding: 0" href="#fiveLatest"><i class="fas fa-calendar-alt"><b
                            style="color: #17a2b8"> 6 последних записей</b></i></a>
            <br>
            <hr>
            <i class="fas fa-edit" style="color: #17a2b8">Свободное поле</i>
            <br>gi
            <hr>
            <a class="nav-link" style="margin: 0; padding: 0; color: #17a2b8" href="{{ url('/posts') }}"><i
                        class="fas fa-folder"><b> Показати вс1</b></i></a>
            <br>
            <hr>
            <button id="geo"><i class="fas fa-binoculars" style="color: #17a2b8"> Геолокация</i></button>
            <br>
            <hr>
        </div>
    </div>
    <div class="district-title">
        <span class="title">Раёны нашего города</span>
    </div>

    <div class="districts-name">

    </div>

    {{--<div class="container-fluid">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-8">--}}
    {{--</div>--}}
    {{--<div class="col-sm">--}}
    {{--class="nav-item {{ (request()->is('posts/create') ? 'active' : '') }}">--}}
    {{--<a class="nav-link" href="{{ url('/posts/create') }}"><h6><b>СТВОРИТИ СКАРГУ</b></h6></a>--}}
    {{--<div class="row" id="fiveLatest">--}}
    {{--@foreach($posts as $post)--}}
    {{--<div class="col-md-6">--}}
    {{--@include('post._card', ['post' => $post])--}}
    {{--</div>--}}
    {{--@endforeach--}}
    {{--</div>--}}
    {{----}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}


    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper" >
            <div class="swiper-slide"> <img class="Foters" src="{{asset('images/main.jpg')}}" alt="main"> </div>
            <div class="swiper-slide"><img class="Foters" src="{{asset('images/main.jpg')}}" alt="main"></div>
            <div class="swiper-slide"><img class="Foters" src="{{asset('images/2249739_900.jpg')}}" alt="main"></div>
            <div class="swiper-slide"><img class="Foters" src="{{asset('images/02345348.jpg')}}" alt="main"></div>
            <div class="swiper-slide"><img class="Foters" src="{{asset('images/main.jpg')}}" alt="main"></div>
            <div class="swiper-slide"><img class="Foters" src="{{asset('images/02345348.jpg')}}" alt="main"></div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>


@endsection