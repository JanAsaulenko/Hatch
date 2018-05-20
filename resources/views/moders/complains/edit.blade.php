@extends('layout.app')


        <!DOCTYPE html>
<html lang="en">


@section('title', 'Form');
<head>
    <style>

        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}


        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        .modal-content, #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)}
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }

        .closed {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .closed:hover,
        .closed:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }


        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
    </style>
</head>
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
            {{ Form::label('title', "Заголовок скарги", ['class' => 'control-label']) }}
            {{ Form::text('title', $complain->title, [
                'class' => $errors->has('title') ? 'has-error' : "",
            ]) }}
        </div>
        <div class="col-md-2" class="form-group">
            {{ Form::label('username', "Ім'я користувача", ['class' => 'control-label']) }}
            {{ Form::text('username', $complain->username, [
                'class' => $errors->has('username') ? 'has-error' : "",
            ]) }}
        </div>
        <div class="col-md-4" class="form-group">
            {{ Form::label('#', "Перелік прикріплених фото", ['class' => 'control-label']) }}
            {{--@foreach($fotos as $key => $foto)--}}
                {{--<option value="{{ $key }} "> {{ $foto }} </option>--}}
            {{--@endforeach--}}
            {{--{{ Form::select('foto', $foto ) }}--}}
        </div>
        <div class="col-md-2" class="form-group">

            {{ Form::submit('Зберегти', array('class' => 'btn btn-success btn btn-block')) }}


            <a href="{{ url('moders/complains/' ) }}" type="link" class="btn btn-primary btn-block" >До списку скарг</a>

        </div>

    </div>


    <div class="row">
        <div class="col-md-5" class="form-group">
            {{ Form::label('comments', "Текст скарги", ['class' => 'control-label']) }}
            {{ Form::textarea('comments', $complain->comments, [
                'row' => '5', 'class' => 'form-control'
            ]) }}
        </div>
        <div class="col-md-5">
            {{--<a href="/images/body_bg.jpg">--}}
            <img id="myImg" class="img-fluid rounded mb-3 mb-md-0" src="/images/body_bg.jpg" alt="Фото комплейна">
            {{--</a>--}}
        </div>
        <div id="myModal" class="modal">
            <span class="closed">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>

        <script>

            var modal = document.getElementById('myModal');


            var img = document.getElementById('myImg');
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

        {!! Form::open(['method' => 'DELETE','route' => ['complains.destroy', $complain->id],'style'=>'display:inline']) !!}
        {!! Form::submit('Видалити', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}



            span.onclick = function() {
                modal.style.display = "none";
            }
        </script>


{{ Form::close() }}
        <div class="col-md-2" class="form-group">
        {!! Form::open(['method' => 'DELETE','route' => ['complains.destroy', $complain->id],'style'=>'display:inline']) !!}
        {!! Form::submit('Видалити', ['class' => 'btn btn-danger btn-block']) !!}
        {!! Form::close() !!}
        </div>
    </div>
@endsection