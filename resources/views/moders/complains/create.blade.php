

@extends('layout.app')

@section('title', 'Form')
@section('content')


    <body>
    <div class="container">
        <form action="{{ url('moders/complains/') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Введіть номер скарги, до якої потрібно додати фото</label>
                <input class="form-control" id="id" placeholder="номер" name="id">
            </div>
            <div class="form-group">
                <label for="img">Оберіть файл</label>
                <input id="img" type="file"  name="img">
            </div>
            <button type="submit" class="btn btn-default">Додати</button>
        </form>
    </div>
    </body>
@endsection
