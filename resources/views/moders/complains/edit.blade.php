@extends('layout.app')


        <!DOCTYPE html>
<html lang="en">


@section('title', 'Form');

@section('content')

    <h1>Сторінка редагування скарга № {{ $complain->id }}</h1>

    {{ Form::open(array('url' => 'moders/complains/'. $complain->id, 'method' => 'PUT')) }}

        <div class="row">

        <div class="col-md-2" class="form-group">
                {{ Form::label('created_at', "Дата створення", ['class' => 'control-label']) }}
                {{ Form::date('created_at', $complain->created_at, [
                    'class' => $errors->has('created_at') ? 'has-error' : "",
                ]) }}
            </div>
            <div class="col-md-2" class="form-group">
                {{ Form::label('tittle', "Заголовок скарги", ['class' => 'control-label']) }}
                {{ Form::text('tittle', $complain->tittle, [
                    'class' => $errors->has('tittle') ? 'has-error' : "",
                ]) }}
            </div>
            <div class="col-md-2" class="form-group">
                {{ Form::label('username', "Ім'я користувача", ['class' => 'control-label']) }}
                {{ Form::text('username', $complain->username, [
                    'class' => $errors->has('username') ? 'has-error' : "",
                ]) }}
            </div>
        <div class="col-md-5" class="form-group">
                {{ Form::label('comments', "Текст скарги", ['class' => 'control-label']) }}
                {{ Form::textarea('comments', $complain->comments, [
                    'row' => '5', 'class' => 'form-control'
                ]) }}
            </div>

        <div class="col-md-1" class="form-group">

            {{ Form::submit('Зберегти', array('class' => 'btn btn-primary')) }}

            <a href="{{ url('moders/complains/' ) }}" type="link" class="btn btn-outline-success btn-sm" >До списку скарг</a>
        </div>

    {{ Form::close() }}



    </div>






@endsection