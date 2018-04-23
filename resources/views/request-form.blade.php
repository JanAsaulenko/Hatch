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

                <script>
                    function initMap() {
                        let uluru = {lat: -25.363, lng: 131.044};
                        let map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 4,
                            center: uluru
                        });
                        let  marker = new google.maps.Marker({
                            position: uluru,
                            map: map
                        });
                    }
                </script>
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA05esJ-MwwOjDViI7mZBvbt-wUPkrEoXg&callback=initMap">
                </script>
        </div>
    </div>
</div>
</div>
@endsection
