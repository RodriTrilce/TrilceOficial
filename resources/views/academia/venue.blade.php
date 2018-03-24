@extends('academia.layouts.template')

@section('title', $title)

@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-1"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>{{ ucwords($sede) }}</h1>
      </div>
    </div>
    
  </div>
  
  <div class="venue">
    <div>
      <h2>Lorem Ipsimum</h2>
      <div class="hr"></div>
      <ul class='venue-ul'>
        <li><b>Horario de Atención:</b> <br>{horario de atención}</li>
        <li><b>Locales:</b> <br>{direccion}</li>
        <li><b>Teléfono:</b> <br>{numero}</li>
      </ul>
    </div>
    <div class="map-container">
      <div id="map"></div>
    </div>
  </div>

  <div class="card">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <a href="#">
            <i class="fa fa-bullhorn"></i>
            <h3>Simulacros</h3>
            <p>Lorem ipsum dolor sit amet, consectetur.</p>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <a href="#">
            <i class="fa fa-paperclip"></i>
            <h3>Solucionarios</h3>
            <p>Lorem ipsum dolor sit amet, consectetur.</p>
          </a>
        </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="#">
              <i class="fa fa-cut"></i>
              <h3>Lista de cachimbos</h3>
              <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="#">
              <i class="fa fa-lightbulb-o"></i>
              <h3>Olimpiadas Matemática</h3>
              <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </a>
          </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
  @parent
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp" charset="utf-8"></script>
  <script type="text/javascript">
  google.maps.event.addDomListener(window, 'load', function(){
    var myLatlng = new google.maps.LatLng({{$map['lt']}},{{$map['lg']}}),
        mapOptions = {
            zoom: 13,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
    var contentString = 'Times Square, Manhattan';
    var infowindow = new google.maps.InfoWindow({
        content: contentString,
        maxWidth: 500
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