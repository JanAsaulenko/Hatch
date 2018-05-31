@extends('layout.app')

@section('title', 'Home')

@section('content')

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">username</th>
            <th scope="col">@ e_mail</th>
            <th scope="col">role</th>
            <th scope="col">Change</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td></td>
            <td></td>
            <td></td>
            <td  ><button type="button" class="btn btn-outline-primary">Delele</button></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td></td>
            <td></td>
            <td></td>
            <td><button type="button" class="btn btn-outline-primary">Delete</button></td>
        </tr>


        </tbody>
    </table>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">id</th>
            <th scope="col">username</th>
            <th scope="col">@ e_mail</th>
            <th scope="col">role</th>
            <th scope="col">Change</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td></td>
            <td></td>
            <td></td>
            <td><button type="button" class="btn btn-outline-primary">Delete</button></td>
        </tr>


        </tbody>
    </table>
@endsection