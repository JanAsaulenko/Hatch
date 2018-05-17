
@extends('layout.app')


        <!DOCTYPE html>
<html lang="en">


@section('title', 'Form');



@section('content')

    <!-- Модальное окно -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" > </h4>
                </div>
                <div class="modal-body">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <h1><small> Bcі скарги</small></h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Заголовок скарги</th>
            <th scope="col">Текст скарги</th>
            <th scope="col">Ім'я скаржника </th>
            <th scope="col"> </th>
            <th scope="col">                </th>
            <th scope="col">                </th>
            <th scope="col"> </th>
            <th scope="col"> </th>
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
                <td>
                    <div>{{$complain->username}}</div>
                </td>
                <td>
                    <form action="{{ url('moders/complains/'. $complain->id ) }}" method="POST">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}

                        <button type="submit" name="confirmed" class="btn btn-outline-success btn-sm" >
                            <i class="far fa-save"></i>
                        </button>
                    </form>
                </td>
                <td>
                    <a href="{{ url('moders/complains/' . $complain->id . '/edit') }}" type="link" class="btn btn-outline-success btn-sm" >
                        <i class="far fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ url('moders/complains/' . $complain->id ) }}" type="link" class="btn btn-outline-success btn-sm" >
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
                <td>

                    <form action="{{url('moders/complains/' . $complain->id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button class="btn btn-outline-danger btn-sm">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
                <td>
                    <button type="button" class="btn btn-warning btn-sm modal-show" data-toggle="modal" data-target="#myModal" data-title="Зображення до скарги {{$complain->id}}"
                            data-content="<img class='img-responsive center-block' src='images/post/body_bg.jpg'>">
                        <i class="far fa-image"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $complains->links( "pagination::bootstrap-4") }}


    </div>




@endsection