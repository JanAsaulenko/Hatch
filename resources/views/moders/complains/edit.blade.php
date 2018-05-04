@extends('layout.app')


        <!DOCTYPE html>
<html lang="en">


@section('title', 'Form');

@section('content')

    <h1>Edit {{ $complain->id }}</h1>

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



@endsection