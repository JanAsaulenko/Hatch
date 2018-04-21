@extends('layout.app')

@section('title', 'Home')

@section('content')
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="http://via.placeholder.com/16x4" alt=""></div>
            <div class="swiper-slide"><img src="http://via.placeholder.com/16x4" alt=""></div>
            <div class="swiper-slide"><img src="http://via.placeholder.com/16x4" alt=""></div>
            <div class="swiper-slide"><img src="http://via.placeholder.com/16x4" alt=""></div>
            <div class="swiper-slide"><img src="http://via.placeholder.com/16x4" alt=""></div>
            <div class="swiper-slide"><img src="http://via.placeholder.com/16x4" alt=""></div>
            <div class="swiper-slide"><img src="http://via.placeholder.com/16x4" alt=""></div>
            <div class="swiper-slide"><img src="http://via.placeholder.com/16x4" alt=""></div>
            <div class="swiper-slide"><img src="http://via.placeholder.com/16x4" alt=""></div>
            <div class="swiper-slide"><img src="http://via.placeholder.com/16x4" alt=""></div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm"><a href="#">View all</a></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
                <div class="row">
                    <div class="col-sm-6"><h2>Коментарий1</h2></div>
                    <div class="col-sm-6">Date</div>
                </div>
                <div class="row">
                    <div class="col-sm">USER:An accaunt is required in order to save your project and access sharing</div>
                </div>
            </div>
            <div class="col-sm-2"> <img src="{{asset('images/home/images.png')}}"></div>
            <div class="col-sm-5"><a href="#">View all</a></div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <h2>Коментарий2</h2>

            </div>
            <div class="col-sm-2"><a href="#">View all</a></div>
            <div class="col-sm-5"><a href="#">View all</a></div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <h2>Коментарий3</h2>

            </div>
            <div class="col-sm-2"><a href="#">View all</a></div>
            <div class="col-sm-5"><a href="#">View all</a></div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <h2>Коментарий4</h2>

            </div>
            <div class="col-sm-2"><a href="#">View all</a></div>
            <div class="col-sm-5"><a href="#">View all</a></div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <h2>Коментарий5</h2>

            </div>
            <div class="col-sm-2"><a href="#">View all</a></div>
            <div class="col-sm-5"><a href="#">View all</a></div>
        </div>
    </div>
@endsection
