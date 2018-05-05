
@extends('layout.app')


        <!DOCTYPE html>
<html lang="en">


@section('title', 'Form');

@section('content')

    <div class="container">
        <h1><small> Bcі скарги</small></h1>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Заголовок скарги</th>
                <th scope="col">Текст скарги</th>
                <th scope="col">Ім'я скаржника </th>
                <th scope="col">Затверджено </th>
                <th scope="col">
                    Редагувати
                </th>
                <th scope="col">
                            Затвердити
                </th>
                <th scope="col"> </th>
            </tr>
            </thead>
            <tbody>
            @foreach($complains as $complain)

                <tr>
                    <td>
                        <div>{{$complain->title}}</div>
                    </td>
                    <td>
                        <div>{{$complain->comments}}</div>
                    </td>
                    <td> {{$complain->username}}</td>
                    <td> {{$complain->confirmed}}</td>
                    <td>
                        <a href="{{ url('moders/complains/' . $complain->id . '/edit') }}" type="link" class="btn btn-outline-success btn-sm" >

                            <img src='images/moders/edit.png'></a>

                        </a>
                    </td>
                    <td>
                        {{ Form::open(array('url' => 'moders/complains/', 'method' => 'POST')) }}

                        {{ Form::checkbox('confirmed') }}

                        {{ Form::close() }}

                    </td>
                    <td>
                        {{ Form::open(array('url' => 'moders/complains/' . $complain->id, 'class' => 'btn btn-small')) }}
                        {{ Form::hidden('_method', 'PUT') }}
                        {{ Form::submit('Затвердити', array('class' => 'btn btn-success btn-sm')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $complains->links( "pagination::bootstrap-4") }}


    </div>




@endsection