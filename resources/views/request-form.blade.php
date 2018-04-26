@extends('layout.app')

@section('title', 'Form');
@section('content')
    <div class="container">
        <div class="row">

            <div class="col">
                <div id="latclicked"></div>
                <div id="longclicked"></div>

                <div id="latmoved"></div>
                <div id="longmoved"></div>
                <div class="pen-title">
                    <h1>Форма заполнения</h1>
                </div>
                <!-- Form Module-->
                <div class="module form-module">
                    <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                        <div class="tooltip">Click Me</div>
                    </div>
                    <div class="form">
                        <h2>Добавить опастный участок</h2>
                        <form method="post" action="request-form.blade.php">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                            <h3>My Google Maps</h3>
                            <div id="map"></div>
                            <input type="text" placeholder="Username" name="username"/>
                            <input type="text" name="lat" id="lat"/>
                            <input type="text" name="lng" id="lng"/>
                            <textarea class="form-control" rows="5" id="comment" name="comments"
                                      placeholder="Comment"></textarea>
                            <input type="submit" name="submit" value="Отправить"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
