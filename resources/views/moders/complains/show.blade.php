
@extends('layout.app')


        <!DOCTYPE html>
<html lang="en">


@section('title', 'Form');

@section('content')

    <div class="container">
        <h1><small>  скаргa {{$complain->id}}</small></h1>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Заголовок скарги</th>
                <th scope="col">Текст скарги</th>
                <th scope="col">Ім'я скаржника </th>
                <th scope="col">Затверджено </th>
                <th scope="col">

                </th>

            </tr>
            </thead>
            <tbody>


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
                        <a href="{{ url('moders/complains/' ) }}" type="link" class="btn btn-outline-success btn-sm" >До списку скарг</a>
                    </td>

                </tr>

            </tbody>
        </table>

    </div>




@endsection