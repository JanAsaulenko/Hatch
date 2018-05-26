
@extends('layout.app')


        <!DOCTYPE html>
<html lang="en">


@section('title', 'Form')



@section('content')

    <!-- Main content -->
    <div class="row">
        <!-- header -->
        <div class=" col-md-2 col-sm-3 col-xs-12 tbtxt"><h5>Заголовок скарги</h5></div>
        <div class=" col-md-3 col-sm-6 col-xs-12 tbtxt "><h5>Текст скарги</h5></div>
        <div class=" col-md-1 col-sm-3 col-xs-4 tbtxt "><h5>Ім'я </h5></div>
        <div class=" col-md-1 col-sm-2 col-xs-4 tbtxt"><h5>Стан </h5></div>
        <div class=" col-md-1 col-sm-2 col-xs-4 tbtxt"><h5>Фото </h5></div>
        <div class=" col-md-1 col-sm-2 col-xs-3 tbtxt"></div>
        <div class=" col-md-1 col-sm-2 col-xs-3 tbtxt"></div>
        <div class=" col-md-1 col-sm-2 col-xs-3 tbtxt"></div>
        <div class=" col-md-1 col-sm-2 col-xs-3 tbtxt"></div>

        <!-- loop -->
        @foreach($complains as $complain)

            <div class=" col-md-2 col-sm-3 col-xs-12 tdtxt">
                <div>{{$complain->title}}</div>
            </div>
            <div class=" col-md-3 col-sm-6 col-xs-12 tdtx ">
                <div>{{$complain->comments}}</div>
            </div>
            <div class=" col-md-1 col-sm-3 col-xs-4 tdtxt ">
                <div>{{$complain->username}}</div>
            </div>
            <div class=" col-md-1 col-sm-2 col-xs-4 tdtxt">

                @if ($complain->confirmed == 1)
                    <i>Затверджена</i>

                @else
                    <del>Не затверджена</del>
                @endif
            </div>
            <div class=" col-md-1 col-sm-2 col-xs-4 tdtxt">
                @if ($complain->img)
                    <i>Присутнє</i>

                @else
                    <del>Відсутнє</del>
                @endif
            </div>
            <div class=" col-md-1 col-sm-2 col-xs-3 tdtxt">
                <form action="{{ url('moders/complains/'. $complain->id ) }}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}

                    <button type="submit" name="confirmed" class="btn btn-outline-success btn-sm" >
                        <i class="far fa-save"></i>
                    </button>
                </form>
            </div>
            <div class=" col-md-1 col-sm-2 col-xs-3 tdtxt">
                <a href="{{ url('moders/complains/' . $complain->id . '/edit') }}" type="link" class="btn btn-outline-success btn-sm" >
                    <i class="far fa-edit"></i>
                </a>
            </div>
            <div class=" col-md-1 col-sm-2 col-xs-3 tdtxt">
                <a href="{{ url('moders/complains/' . $complain->id ) }}" type="link" class="btn btn-outline-success btn-sm" >
                    <i class="fas fa-eye"></i>
                </a>
            </div>
            <div class=" col-md-1 col-sm-2 col-xs-3 tdtxt ">
                <form action="{{url('moders/complains/' . $complain->id)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button class="btn btn-outline-danger btn-sm">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form>
            </div>

        @endforeach
    <!-- bottom -->

        <div class=" col-md-2 col-sm-3 col-xs-4 tbtxt">

                <a href="{{ url('moders/complains/' ) }}" type="link" class="btn btn-outline-success btn-sm abtn" >Всі скарги</a>

        </div>
        <div class=" col-md-2 col-sm-3 col-xs-4 tbtxt ">
            <a href="?confirmed=1" type="link" class="btn btn-outline-success btn-sm abtn" >Незатверджені скарги</a>
        </div>
        <div class=" col-md-6 col-sm-3 col-xs-1 tbtxt "></div>
        <div class=" col-md-2 col-sm-3 col-xs-4 tbtxt">
           <div class="abtn"> {{ $complains->links( ) }}</div>
        </div>

    </div>








@endsection