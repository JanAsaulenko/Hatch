@extends('layout.app');

@section('content')

  <div class="position-block">
    <div id="map_district"></div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
      </div>
      <div class="col-sm">
        <div class="nav-item {{ (request()->is('posts/create') ? 'active' : '') }}">
        <a class="nav-link" href="{{ url('/posts/create') }}"><h6><b>СТВОРИТИ СКАРГУ</b></h6></a>
        <div class="row" id="fiveLatest">
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
