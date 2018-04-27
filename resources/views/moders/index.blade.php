
@extends('layout.app')


        <!DOCTYPE html>
<html lang="en">


@section('title', 'Form');

@section('content')

    <div class="container">
        <h1><small>Скарги</small></h1>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Адреса</th>
                <th scope="col">Текст скарги</th>
                <th scope="col">Наявність фото </th>
                <th scope="col">Стан затвердження </th>
                <th scope="col">
                    <a href="http://127.0.0.1:8000/moders/edit" type="link" class="btn btn-outline-success btn-sm" >Редагувати</a>
                </th>
                <th scope="col">
                    <form action="{{ url('complain/1') }}" method="POST">
                    {{ csrf_field() }}
                    <!--  {{--{{ method_field('DELETE') }}--}} -->

                        <button type="submit" class="btn btn-success" value="1">
                            Затвердити
                        </button>
                    </form>
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
                        <a href="http://127.0.0.1:8000/moders/edit" type="link" class="btn btn-outline-success btn-sm" >Редагувати</a>
                    </td>
                    <td>
                        <form action="{{ url('complain/'.$complain->id) }}" method="POST">
                        {{ csrf_field() }}
                        <!-- {{--{{ method_field('DELETE') }}--}} -->

                            <button type="submit" class="btn btn-success" value="1">
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