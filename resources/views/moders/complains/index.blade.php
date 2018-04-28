
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
                <th scope="col">Адреса</th>
                <th scope="col">Текст скарги</th>
                <th scope="col">Наявність фото </th>
                <th scope="col">Стан затвердження </th>
                <th scope="col">
                    Редагувати
                </th>
                <th scope="col">

                            Затвердити

                </th>

            </tr>
            </thead>
            <tbody>
            @foreach($complains as $complain)

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
                        <a href="{{ url('moders/' . $complain->id . '/edit') }}" type="link" class="btn btn-outline-success btn-sm" >Редагувати</a>
                    </td>
                    <td>
                        <form action="{{ url('moders/'. $complain->id ) }}" method="PUT">
                        {{ csrf_field() }}

                                <input type="hidden" name="complain" value="1">
                            <input type="hidden" name="id" value="{{$complain->id}}">
                            <button type="submit" name="confirmed" class="btn btn-success btn-sm" >
                                Затвердити
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>




@endsection