@extends('admin.app')



@section('content')

    <div class="container-fluid" class="row" >
        <div class="row">

            <div class="col-lg-4" >

                <button type="button" class="btn btn-light btn-lg btn-block"><a class="nav-link" href="{{ url('/register') }}"><h4><b>Добавить админа/модератора</b></h4></a></button>
                <button type="button" class="btn btn-light btn-lg btn-block"><a class="nav-link" href="{{ url('/type_complain') }}"><h4><b>Добавить тип жалоб</b></h4></a></button>
            </div>
            <div class="col-lg-8"  >


    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif



<div>
    {!! Form::open (array('url' => 'type_complain', 'method' => 'post')) !!}
    {!! Form::text('type_complain');!!}
    {!! Form::submit('Добавить !',['class' => 'btn btn-primary']);!!}
        {!! Form::close() !!}
</div>

@endsection

