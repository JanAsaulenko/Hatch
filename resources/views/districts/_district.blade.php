<div class="district" >
    <a href="{{route('someDistrict',$district->title)}}">
    <div class="district-name"> {{$district->name}}

     <form class="hidden_form" style="display: none">
       <input value="{{$district->name}}">
       <input id="{{$district->id}}" value="{{$district->zoom}}">
       <input value="{{$district->lng}}">
       <input value="{{$district->lat}}">
     </form>
    </div>
  </a>
</div>
