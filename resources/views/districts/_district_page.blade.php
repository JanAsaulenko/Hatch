@extends('layout.app');

@section('content')

  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  </script>



  
  <script>
      function getMessage(){
          $.ajax({
              type:'POST',
              url:'{{route('getDistrict')}}',
              data: { district_id:' {{$district->id}}' , _token: '{{csrf_token()}}' },
              success:function(data){
                  console.log(data);
                  // $("#msg").html(data.msg);
              }
          });
      }
  </script>

  <div id = 'msg'>This message will be replaced using Ajax.
    Click the button to replace the message.</div>
  <?php
  echo Form::button('Replace Message',['onClick'=>'getMessage()']);
  ?>





  <div class="position-block">
    <div id="map_district"></div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8">

        <div class="districts-name">{{$district->name}}
        </div>
      </div>
      <div class="col-sm">
        <div class="nav-item {{ (request()->is('posts/create') ? 'active' : '') }}">
        <a class="nav-link" href="{{ url('/posts/create') }}"><h6><b>СТВОРИТИ СКАРГУ</b></h6></a>
        <div class="row" id="fiveLatest">
        </div>
      </div>
    </div>

  </div>
  </div>




@endsection
