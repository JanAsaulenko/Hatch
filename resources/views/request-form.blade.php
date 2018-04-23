@extends('layout.app')

@section('title', 'Form');
@section('content')
<div class="container">
    <div class="row">

        <div class="col ">
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
                    <form>
                        <input type="text" placeholder="Username"/>
                        <input type="password" placeholder="Password"/>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                        <h3>My Google Maps</h3>
                        <div id="map"></div>
                        <button>Отправить</button>

                    </form>
                </div>

                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
                </script>
        </div>
    </div>
</div>
@endsection
