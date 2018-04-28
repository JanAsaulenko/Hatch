@extends('layout.app')

@section('title', 'Form')
@section('content')
    <div class="row">
        <div class="col">
            <div class="pen-title">
                <h1>Форма заполнения</h1>
            </div>
            <!-- Form Module-->
            <div class="module form-module">
                <div class="form">
                    <h2>Добавить опастный участок</h2>
                    <form method="post" action="/posts">
                        @csrf
                        <h3>My Google Maps</h3>
                        <div id="map"></div>
                        <input type="text" name="title" placeholder="title"/>
                        <input type="text" placeholder="Username" name="username"/>
                        <input type="text" name="lat" id="lat"/>
                        <input type="text" name="lng" id="lng"/>
                        <textarea class="form-control" rows="5" id="comment" name="comments"
                                  placeholder="Comment"></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
