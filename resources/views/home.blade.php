@extends('layout.app')

@section('title', 'Home')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
        <div id="map_interactive"></div>
      </div>
      <div class="col-md-2" id ="rightForm">
        <br>
        <hr>
        <i class="fas fa-calendar-alt"> За последних 5 дней опастные участки</i>
        <br>
        <hr>
        <i class="fas fa-edit"> Редагтировать форму</i>
        <br>
        <hr>
         <i class="fas fa-folder"> Показать все опастные участки</i>
        <br>
        <hr>
        <button id="geo" ><i class="fas fa-binoculars"> Геолокация</i></button>
        <br>
        <hr>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
      </div>
      <div class="col-sm">
        {{--class="nav-item {{ (request()->is('posts/create') ? 'active' : '') }}">--}}
        <a class="nav-link" href="{{ url('/posts/create') }}"><h6><b>СТВОРИТИ СКАРГУ</b></h6></a>
      </div>
    </div>
  </div>


@endsection
