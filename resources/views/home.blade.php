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
      <div class="col-sm"><a href="#">View all</a></div>
    </div>
  </div>



  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5">
        <div class="row">
          <div class="col-sm-6"><h3>Коментарий1</h3></div>
          <div class="col-sm-6">Date</div>
        </div>
        <div class="row">
          <div class="col-sm">USER:An accaunt is required in order to save your project and access sharing
          </div>
        </div>
      </div>
      <div class="col-sm-2"><h3>My Maps </h3>
        <img src="http://via.placeholder.com/150x150" alt="">
      </div>
      <div class="col-sm-5"><h3>Photo </h3>
        <img src="{{asset('images/home/images.png')}}"></div>
    </div>
    <div class="row">
      <div class="col-sm-5">
        <div class="row">
          <div class="col-sm-6"><h3>Коментарий2</h3></div>
          <div class="col-sm-6">Date</div>
        </div>
        <div class="row">
          <div class="col-sm">USER:An accaunt is required in order to save your project and access sharing
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <img src="http://via.placeholder.com/150x150" alt="">
      </div>
      <div class="col-sm-5">
        <img src="{{asset('images/home/images.png')}}"></div>
    </div>
    <div class="row">
      <div class="col-sm-5">
        <div class="row">
          <div class="col-sm-6"><h3>Коментарий3</h3></div>
          <div class="col-sm-6">Date</div>
        </div>
        <div class="row">
          <div class="col-sm">USER:An accaunt is required in order to save your project and access sharing
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <img src="http://via.placeholder.com/150x150" alt="">
      </div>
      <div class="col-sm-5">
        <img src="{{asset('images/home/images.png')}}"></div>
    </div>
    <div class="row">
      <div class="col-sm-5">
        <div class="row">
          <div class="col-sm-6"><h3>Коментарий4</h3></div>
          <div class="col-sm-6">Date</div>
        </div>
        <div class="row">
          <div class="col-sm">USER:An accaunt is required in order to save your project and access sharing
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <img src="http://via.placeholder.com/150x150" alt="">
      </div>
      <div class="col-sm-5">
        <img src="{{asset('images/home/images.png')}}"></div>
    </div>
    <div class="row">
      <div class="col-sm-5">
        <div class="row">
          <div class="col-sm-6"><h3>Коментарий5</h3></div>
          <div class="col-sm-6">Date</div>
        </div>
        <div class="row">
          <div class="col-sm">USER:An accaunt is required in order to save your project and access sharing
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <img src="http://via.placeholder.com/150x150" alt="">
      </div>
      <div class="col-sm-5">
        <img src="{{asset('images/home/images.png')}}"></div>
    </div>

  </div>
@endsection
