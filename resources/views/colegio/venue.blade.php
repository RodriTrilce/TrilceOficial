{{! $breadcrumbs = Breadcrumbs::render('colegio-venue', $data->name) }}
@extends('colegio.layouts.template')
@section('title', $data->name)
@section('content')

   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
     integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
     crossorigin=""/>
    <style>
    #mapid { height: 100%; }
    .leaflet-control-attribution{
      opacity: .6;
    }
  </style>

  <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-sedes.jpg') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-sedes-movil.jpg') }}" alt="">
    </div>
  </div>

  <div class="row col-xs-12 center-xs venue">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">
      <div class="col-xs-12 col-sm container-base venue-info-container">
        <div class="col-xs-12 venue-info-title"><h2 class="colegio">{{ $data->name}}</h2></div>
        <div class="row col-xs-12 col-sm-12 table-responsive" id="tableade">

          <table class="venue-table">
            <thead>
              <tr>
                <th>Nivel</th>
                <th>Dirección</th>
                <th>Teléfono</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($address as $k)
                <tr>
                  <td data-label="Nivel">{!! $k->grades !!}</td>
                  <td data-label="Dirección">{!! $k->address !!}</td>
                  <td data-label="Teléfono">{{ $k->phone }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>

          <div class="venue-content-editable">
            {{-- {!!$data->content!!} --}}

            {{-- <h2>Horario de clases</h2>

            <table>
            	<thead>
            		<tr>
            			<th>Secci&oacute;n</th>
            			<th>Ingreso</th>
            			<th>Salida</th>
            		</tr>
            	</thead>
            	<tbody>
            		<tr>
            			<td>Primaria 1.&deg; a 6.&deg;</td>
            			<td>7:45 a. m.</td>
            			<td>2:20 p. m.</td>
            		</tr>
            		<tr>
            			<td>Secundaria 1.&deg; a 3.&deg;</td>
            			<td>7:45 a. m.</td>
            			<td>2:30 p. m.</td>
            		</tr>
            		<tr>
            			<td>Secundaria 4.&deg; y 5.&deg;</td>
            			<td>7:45 a. m.</td>
            			<td>3:15 p. m.</td>
            		</tr>
            	</tbody>
            </table>

            <h2>
            	<br>Medios de pago</h2> --}}

              {!!
                $x = str_replace(
                  [
                    '[CONTINENTAL]',
                    '[BCP]',
                    '[SCOTIABANK]'
                  ],
                  [
                    '<a class="method-venue" href="/storage/colegio/documents/pdf/payment-guide/guia-de-pagos-bbva.pdf" target="_blank"><img src="/static/images/colegio/logo-bbva.jpg" alt="Guía de pagos para BBVA"></a>',
                    '<a class="method-venue" href="/storage/colegio/documents/pdf/payment-guide/guia-de-pagos-bcp.pdf" target="_blank"><img src="/static/images/colegio/logo-bcp.jpg" alt="Guía de pagos para BCP"></a>',
                    '<a class="method-venue" href="/storage/colegio/documents/pdf/payment-guide/guia-de-pagos-scotiabank.pdf" target="_blank"><img src="/static/images/colegio/logo-scotiabank.jpg" alt="Guía de pagos para Scotiabank"></a>'
                  ],
                  $data->content
                )
              !!}

          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm map-container">
        <div id="mapid"></div>
      </div>
    </div>
  </div>


  <div class="row col-xs-12 center-xs venue-colegio-investment">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md investment-container">

      <div class="row col-xs-12 col-sm-2 investment-title">
        <h3>Inversión</h3>
      </div>

      <div class="row col-xs-12 col-sm investment-block">

        @foreach ($investment as $k)
          <div class="row col-xs-12 investment-block-item">
            <div class=""><span class="venue-colegio-title-span"><strong>{!! $k->range !!}</strong></span></div>

            @if($k->admissionfee)
            <div class=""><span class="venue-colegio-title-span">Cuota de ingreso: {!! $k->admissionfee !!}</span></div>
            @endif

            @if($k->enrollment)
            <div class=""><span class="venue-colegio-title-span">Matrícula: {!! $k->enrollment !!}</span></div>
            @endif

            @if($k->monthlypayment)
            <div class=""><span class="venue-colegio-title-span">Mensualidad {!! $k->monthlypayment !!}</span></div>
            @endif
          </div>
        @endforeach

      </div>

    </div>
  </div>
@include('colegio.partials.ads')


  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'venue_colegio';

  @parent

    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
  integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
  crossorigin=""></script>
  <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
  <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />

  <script type="text/javascript">
    var mymap = L.map('mapid').setView([-12.049882,-77.038304], 13);
    
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

    @foreach ($address as $k)

      var marker = L.marker([{{ $k->logitude }},{{ $k->latitude }}], {icon: greenIcon}).addTo(mymap);
      marker.bindPopup(`<span style="color:#f4633a">{{ $data->name }}</span>
        <br>{!! $k->grades !!}
        <br>{{!! $k->address !!}}
        <br><i class="fa fa-phone" aria-hidden="true" style="color: #f4633a;"></i> {{ $k->phone }}`).openPopup();
    @endforeach

  </script>
@endsection
