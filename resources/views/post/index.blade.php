@extends('layout.app')

@section('title', 'Home')

@section('content')
    <div class="pen-title">
        <h1>All posts (rus)</h1>
    </div>
    <div class="module form-module">
        <div class="row">
            <div class="col">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-6 px-2">
                            @include('post._card', ['post' => $post])
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('post._modal')
@endsection