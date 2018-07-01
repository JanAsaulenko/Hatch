@extends('layout.app')

@section('title', 'Home')

@section('content')

  <div class="position-block">




    <div class="video">
      <video id="video" loop preload="auto" muted poster="assets/4p.png" autoplay style="position: absolute; right: 0; bottom: 0; min-width: 100%; min-height: 100%; width: auto; height: auto; z-index: -1000;  ">
        <source src="{{ asset('video/Vinnitsya.mp4') }}" type="video/webm">
      </video>
    </div>
  </div>
  <div>
  </div>

  <div class="district-title">
    <span class="title">Административные раёны города</span>
  </div>
  <div class="posts-name">
    @foreach($districts as $district)
      @include('districts._district',['$district'=>$district])
    @endforeach
  </div>
    <div class="pictures">
      <img src="{{asset('images/len.jpg')}}">
      <img src="{{asset('images/star.jpg')}}">
      <img src="{{asset('images/zam.jpg')}}">
  </div>


    <div id="map_interactive"></div>

    <div id="rightForm">
      <br>
      <hr>
      <a class="nav-link" style="margin: 0; padding: 0" href="#fiveLatest"><i class="fas fa-calendar-alt"><b
              style="color: #17a2b8"> 6 последних записей</b></i></a>

      <br>
      <hr>
      <i class="fas fa-edit" style="color: #17a2b8">Свободное поле</i>
      <br>
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

  @endsection
