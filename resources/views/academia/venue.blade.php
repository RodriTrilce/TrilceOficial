@extends('academia.layouts.template')

@section('title', $data->name)

@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-1"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>{{ $data->name }}</h1>
      </div>
    </div>
  </div>
  
  <div class="venue">
    <div>
      <h2>Información general</h2>
      <div class="hr"></div>
      <ul class='venue-ul'>
        <li><b>Horario de Atención:</b> <br>{{ $data->horary }}</li>
        <li><b>Dirección:</b> <br>{{ $data->direction }}</li>
        <li><b>Teléfono:</b> <br>{{ $data->phone }}</li>
      </ul>
    </div>
    <div class="map-container">
      <div id="map"></div>
    </div>
  </div>

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'venue';

  @parent
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp" charset="utf-8"></script>
  <script type="text/javascript">
  google.maps.event.addDomListener(window, 'load', function(){
    var myLatlng = new google.maps.LatLng({{$data->logitude}},{{$data->latitude}}),
        mapOptions = {
            zoom: 15,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        
    var infowindow = new google.maps.InfoWindow({
        content  : 'Times Square, Manhattan',
        maxWidth : 500
    });

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
    });

    google.maps.event.addDomListener(window, "resize", function() {
        google.maps.event.trigger(map, "resize");
        map.setCenter(map.getCenter());
    });
  });
  </script>
@endsection