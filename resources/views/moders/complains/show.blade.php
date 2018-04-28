
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
                <th scope="col">Адреса</th>
                <th scope="col">Текст скарги</th>
                <th scope="col">Наявність фото </th>
                <th scope="col">Стан затвердження </th>
                <th scope="col">

                </th>
                <th scope="col">



                </th>

            </tr>
            </thead>
            <tbody>


                <tr>
                    <td>
                        <div>{{$complain->address}}</div>
                    </td>
                    <td>
                        <div>{{$complain->comments}}</div>
                    </td>
                    <td> {{$complain->img}}</td>
                    <td> {{$complain->confirmed}}</td>
                    <td>

                    </td>
                    <td>

                    </td>

                </tr>

            </tbody>
        </table>

    </div>




@endsection