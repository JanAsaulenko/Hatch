@extends('layout.app')


        <!DOCTYPE html>
<html lang="en">


@section('title', 'Form');

@section('content')

    <h1>Сторінка редагування скарга № {{ $complain->id }}</h1>

    <table style="width: 100%"border="1">
    <tr>
        <th scope="col">Дата</th>
        <th scope="col">Заголовок скарги </th>
        <th scope="col">Ім'я користувача</th>
        <th scope="col">Текст скарги</th>
        <th scope="col">Затвердити </th>
        <th scope="col">Повернутись до списку</th>
    </tr>
    <tr>
        <form action="" method="post">
            <input type="hidden" name="id" value="{{$complain->id}}">
            <td><input type="date" name="created_at" value="{{$complain->created_at}}"></td>
            <td><input type="text" name="title" value="{{$complain->title}}"></td>
            <td><input type="text" name="username" value="{{$complain->username}}"></td>
            <td><textarea rows="7" cols="50" id="comments" name="comments">{{$complain->comments}}</textarea></td>
            <td><input type="submit" name="seve" value="Зберегти"></td>
            <td>
                <a href="{{ url('moders/' ) }}" type="link" class="btn btn-outline-success btn-sm" >До списку скарг</a>
            </td>

        </form>
    </tr>
    </table>
    <?php
//    print_r($_GET);
    ?>


    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>


@endsection