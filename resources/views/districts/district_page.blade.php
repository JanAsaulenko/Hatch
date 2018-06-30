@extends('layout.app');

@section('district')

  {{--<div class="position-block">--}}
    {{--<div id="map_interactive"></div>--}}
  {{--</div>--}}
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

      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}
@endsection