{{! $breadcrumbs = Breadcrumbs::render('academia-venue', $data->name) }}
@extends('academia.layouts.template')
@section('title', $data->name)
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6"></div>
      <div class="col-xs-12 col-sm-6 header-double-w-venues"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>{{ $data->name }}</h1>
      </div>
    </div>
  </div>

  <div class="row col-xs-12 center-xs venue">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-md">

      <div class="col-xs-12 col-sm container-base venue-info-container">
        <div class="col-xs-12 venue-info-title"><h2>Información general</h2></div>
        <div class="row col-xs-12 col-sm-12 table-responsive">
          <table class="venue-table">
            <thead>
              <tr>
                <th>Horario de atención</th>
                <th>Dirección</th>
                <th>Teléfono</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td data-label="Horario de atención"> {!! $data->horary !!}</td>
                  <td data-label="Dirección"> {{ $data->direction }}</td>
                  <td data-label="Teléfono"> {{ $data->phone }}</td>
                </tr>
            </tbody>
          </table>
          <br />

          <div class="venue-content-editable">

          <table>
            <thead>
              <tr>
                <th>Nivel<br>
                </th>
                <th>Ingreso</th
                  ><th>Salida</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Nivel">Primaria 1.° y 2.°</td>
                <td data-label="Ingreso">7:50 a. m.</td>
                <td data-label="Salida">2:40 p. m.</td>
              </tr>

              <tr>
                <td data-label="Nivel">Primaria 3.° y 4.°</td>
                <td data-label="Ingreso">7:50 a. m.</td>
                <td data-label="Salida">2:50 p. m.</td>
              </tr>
              <tr>
                <td data-label="Nivel">Primaria 5.° y 6.°</td>
                <td data-label="Ingreso">7:50 a. m.</td>
                <td data-label="Salida">3:00 p. m.</td>
              </tr>
              <tr>
                <td data-label="Nivel">Secundaria 1.° a 5.°</td>
                <td data-label="Ingreso">7:50 a. m.</td>
                <td data-label="Salida">3:10 p. m.</td>
              </tr>
            </tbody>
          </table>

          </div>


        </div>

      </div>

      <div class="col-xs-12 col-sm map-container">
        <div id="map"></div>
      </div>

    </div>
  </div>


  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'venue';

  @parent
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDU9IczA6fujtDzHPy0xWnHLqHHMuB1vKM" charset="utf-8"></script>
  <script type="text/javascript">
  function initMap(){
      var options = {
          zoom:13,
          center:{lat:{{$data->logitude}},lng:{{$data->latitude}}},
      }

      var map = new google.maps.Map(document.getElementById('map'), options);

      var markers = [
        {
          coords:{lat:{{ $data->logitude }},lng: {{ $data->latitude }} },
          content: `<span style="color:#f4633a">{{ $data->name }}</span><br>{!! $data->direction !!} <br> <i class="fa fa-phone" aria-hidden="true" style="color: #f4633a;"></i> {{ $data->phone }}`
        },

      ];

      for(var i = 0;i < markers.length;i++){
          addMarker(markers[i]);
      }

      function addMarker(props){
          var marker = new google.maps.Marker({
              position:props.coords,
              map:map
          });


          let ico = {url:'{{url('/static/images/map-marker.svg')}}',
          scaledSize: new google.maps.Size(50, 50), // scaled size
          origin: new google.maps.Point(0,0), // origin
          anchor: new google.maps.Point(0, 0) // anchor
          };
          marker.setIcon(ico);


          if(props.content){
              var infoWindow = new google.maps.InfoWindow({
                  content:props.content
              });

              marker.addListener('click', function(){
                  infoWindow.open(map, marker);
                  map.setCenter(marker.getPosition());
              });
          }
      }
  }
  initMap();
  </script>
@endsection
