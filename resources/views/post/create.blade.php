@extends('layout.app')

@section('title', 'Form')
@section('content')
  <div class="row">
    <div class="col">
      <div class="pen-title">
        <h1>Форма заполнения</h1>
      </div>
      <!-- Form Module-->
      <div class="module form-module">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <div class="form container-fluid">
          {{ Form::model($post, ['url' => 'posts', 'method' => 'post']) }}
          @csrf
          {{ Form::hidden('lat', null, ['id' => 'lat']) }}
          {{ Form::hidden('lng', null, ['id' => 'lng']) }}

          <div class="row">
            <h2>Добавить опастный участок</h2>
            <div id="map" class="{{ $errors->has('map') ? 'has-error' : '' }}"></div>
          </div>
          <div class="row">
            {{ Form::label('title', 'Title', ['class' => 'control-label']) }}
            {{ Form::text('title', null, [
                'class' => $errors->has('title') ? 'has-error' : '',
            ]) }}
            {{--<span>{{$errors->first('title')}}</span>--}}
          </div>

          <div class="row">
            {{ Form::label('username', 'Username', ['class' => 'control-label']) }}
            {{ Form::text('username',null , [
                'class' => $errors->has('username') ? 'has-error' : "",
            ]) }}
          </div>

          <div class="row">
            {{ Form::label('comments', 'Comments', ['class' => 'control-label']) }}
            {{ Form::textarea('comments', null, [
                'row' => '5', 'class' => 'form-control'
            ]) }}
          </div>

          <div class="row">
            <button type="submit">Submit</button>
          </div>

          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
@endsection
