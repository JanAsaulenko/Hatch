@extends('layout.app')

@section('title', 'Home')

@section('content')
  <div class="position-block">
        <div id="map_interactive"></div>
        <div  id ="rightForm">
        <br>
        <hr>
        <a class="nav-link" style="margin: 0; padding: 0" href="#fiveLatest"><i class="fas fa-calendar-alt"><b style="color: #17a2b8"> 6 последних записей</b></i></a>
        <br>
        <hr>
        <i class="fas fa-edit" style="color: #17a2b8">Свободное поле</i>
        <br>
        <hr>
        <a class="nav-link" style="margin: 0; padding: 0; color: #17a2b8" href="{{ url('/posts') }}"><i class="fas fa-folder"><b> Показати вс1</b></i></a>
        <br>
        <hr>
        <button id="geo" ><i class="fas fa-binoculars" style="color: #17a2b8"> Геолокация</i></button>
        <br>
        <hr>
      </div>
  </div>
<div class="district-title">
      <span class="title">Раёны нашего города</span>
</div>
<div class="districts-name">
      @foreach($districts as $district)

            @include('districts._district',['district'=>$district])

        @endforeach
</div>



  @endsection