
@extends('layout.app')


        <!DOCTYPE html>
<html lang="en">


@section('title', 'Form');



@section('content')

    <!-- Модальное окно -->
    <div class="modal fade" id="myModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                    <h4 class="modal-title" id="title"></h4>
                </div>
                <div class="modal-body">
                    <p id="content"  ></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрити</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
        <h1><small> Bcі останні скарги</small></h1>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col" class="tbtxt">Заголовок скарги</th>
                <th scope="col" class="tbtxt">Текст скарги</th>
                <th scope="col" class="tbtxt">Ім'я скаржника </th>
                <th scope="col" class="tbtxt">Зображення </th>
                <th scope="col" class="tbtxt"> </th>
                <th scope="col" class="tbtxt"> </th>
                <th scope="col" class="tbtxt"> </th>
                <th scope="col" class="tbtxt"> </th>

            </tr>
            </thead>
            <tbody>
            @foreach($complains as $complain)

                <tr>
                    <td class="tdtxt">
                        <div>{{$complain->title}}</div>
                    </td>
                    <td class="tdtxt">
                        <div>{{$complain->comments}}</div>
                    </td>
                    <td class="tdtxt">
                        <div>{{$complain->username}}</div>
                    </td>
                    <td class="tdtxt">
                        <button type="button" class="btn btn-warning btn-sm " id="myM" data-toggle="modal" data-target="#myModal"
                                data-title="Скарга {{$complain->id}} : {{$complain->title}}"
                                data-content='<img src="/upload/complain/{{$complain->id}}/{{$complain->img}}"
                                 alt="Complaint {{$complain->id}} img" >' >
                            <i class="far fa-image"></i>
                        </button>
                    </td>
                    <td class="tdtxt">
                        <form action="{{ url('moders/complains/'. $complain->id ) }}" method="POST">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <button type="submit" name="confirmed" class="btn btn-outline-success btn-sm" >
                                <i class="far fa-save"></i>
                            </button>
                        </form>
                    </td>
                    <td class="tdtxt">
                        <a href="{{ url('moders/complains/' . $complain->id . '/edit') }}" type="link" class="btn btn-outline-success btn-sm" >
                            <i class="far fa-edit"></i>
                        </a>
                    </td>
                    <td class="tdtxt">
                        <a href="{{ url('moders/complains/' . $complain->id ) }}" type="link" class="btn btn-outline-success btn-sm" >
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td class="tdtxt">

                        <form action="{{url('moders/complains/' . $complain->id)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-outline-danger btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $complains->links( "pagination::bootstrap-4") }}


    </div>




@endsection