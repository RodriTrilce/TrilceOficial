{{! $breadcrumbs = Breadcrumbs::render('academia-venue', $data->name) }}
@extends('academia.layouts.template')
@section('title', $data->name)
@section('content')

  <!-- map -->
  <style>
    #mapid { height: 100%; }
    .leaflet-control-attribution{
      opacity: .6;
    }
  </style>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>  

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
      <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-venues"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>
          @if($data->name == 'Cercado de Lima')
            Cercado de Lima (Torrico)
          @else
            {{ $data->name }}
          @endif
        </h1>
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

          <style>
            .ref{
              width: 100%;
              margin-bottom: 20px;
              padding: 8px;
              font-size: 14px;
              font-family: "Geogrotesque-Rg" !important;
              border: 1px solid #ddd;

            }
            .ref2{
              margin-bottom: 0;
              display: flex;
              align-items: center;
              flex-wrap: nowrap;

            }
            .ref strong{
              margin-right: 5px;
            }

            .reflog{
              display: inline-block;
            }

            .reflog img{
              width: 48px;
            }
          </style>

          <div class="venue-content-editable">
            {!! $x =
              str_replace(
                [
                  'alt=',
                  '<a href',
                  'title="UNI"></a>',
                  'title="San Marcos"></a>',
                  'title="PUCP"></a>',
                  '"><img'
                ],
                [
                  'title=',
                  '<a class="venue-preparation-item" href',
                  'title="UNI"><strong>UNI</strong></a>',
                  'title="San Marcos"><strong>San Marcos</strong></a>',
                  'title="PUCP"><strong>PUCP</strong></a>',
                  '#' . Str::slug($data->name) . '"><img'
                ]
                ,$data->content) !!}
          </div>

        </div>
      </div>

      <div class="col-xs-12 col-sm map-container">
        <div id="mapid"></div>
      </div>

    </div>
  </div>


  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'venue';

  @parent

  <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin="">
  </script>
  <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
  <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />

  <script>
    var mymap = L.map('mapid').setView([{{$data->logitude}},{{$data->latitude}}], 17);

    mymap.addControl(new L.Control.Fullscreen());

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoiemVudGlkbyIsImEiOiJjanNidW5oNzgwZWFrNDNvODdkYzRvb2RpIn0.tZbhzFp5-WPfsxvutTL00w'
    }).addTo(mymap);

    var greenIcon = L.icon({
        iconUrl: 'https://www.trilce.edu.pe/static/images/map-marker.svg',

        iconSize:     [50, 55], // size of the icon
        iconAnchor:   [30, 55], // point of the icon which will correspond to marker's location
        popupAnchor:  [-5, -55] // point from which the popup should open relative to the iconAnchor
    });

    var marker = L.marker([{{$data->logitude}},{{$data->latitude}}], {icon: greenIcon}).addTo(mymap);
    marker.bindPopup(`<span style="color:#f4633a">{{ $data->name }}</span><br>{!! $data->direction !!} <br> <i class="fa fa-phone" aria-hidden="true" style="color: #f4633a;"></i> {{ $data->phone }}`).openPopup();
  </script>


@endsection
