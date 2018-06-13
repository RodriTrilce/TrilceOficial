{{! $breadcrumbs = Breadcrumbs::render('colegio-venue', $data->name) }}
@extends('colegio.layouts.template')
@section('title', $data->name)
@section('content')

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
        <h2 class="venue-colegio-h2">{{ $data->name }}</h2>
        <div class="venues-hr"></div>

        <div class="row col-xs-12 col-sm-12">

          <div class="row col-xs venue-colegio-table-block venue-colegio-table-line venue-colegio-table-block1">
            <div class="col-xs-12 venue-colegio-table-title"><i class="venue-colegio-icon fa fa-graduation-cap"></i> Nivel</div>
            @foreach ($address as $k)
              <div class="col-xs-12"><span class="venue-colegio-title-span">{!! $k->grades !!}</span></div>
            @endforeach
          </div>

          <div class="row col-xs venue-colegio-table-block venue-colegio-table-line">
            <div class="col-xs-12 venue-colegio-table-title"><i class="venue-colegio-icon fa fa-building"></i> Dirección</div>
            @foreach ($address as $k)
              <div class="col-xs-12"><span class="venue-colegio-title-span">{{ $k->address }}</span></div>
            @endforeach
          </div>

          <div class="row col-xs venue-colegio-table-block">
            <div class="col-xs-12 venue-colegio-table-title"><i class="venue-colegio-icon fa fa-phone"></i> Teléfono</div>
            @foreach ($address as $k)
              <div class="col-xs-12"><span class="venue-colegio-title-span">{{ $k->phone }}</span></div>
            @endforeach
          </div>

        </div>

      </div>
      <div class="col-xs-12 col-sm map-container">
        <div id="map"></div>
      </div>

    </div>
  </div>


  <div class="row col-xs-12 center-xs venue-colegio-investment">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md investment-container">

      <div class="row col-xs-12 col-sm-3 investment-title">
        <h3>Inversión</h3>
      </div>

      <div class="row col-xs-12 col-sm investment-block">

        @foreach ($investment as $k)
          <div class="row col-xs-12 investment-block-item">
            <div class="col-xs"><span class="venue-colegio-title-span"><strong>{!! $k->range !!}</strong></span></div>

            @if($k->admissionfee)
            <div class="col-xs"><span class="venue-colegio-title-span">Cuota de ingreso: {!! $k->admissionfee !!}</span></div>
            @endif

            @if($k->enrollment)
            <div class="col-xs"><span class="venue-colegio-title-span">Matrícula: {!! $k->enrollment !!}</span></div>
            @endif

            @if($k->monthlypayment)
            <div class="col-xs"><span class="venue-colegio-title-span">Mensualidad: {!! $k->monthlypayment !!}</span></div>
            @endif
          </div>
        @endforeach

      </div>

    </div>
  </div>


  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'venue';

  @parent
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDU9IczA6fujtDzHPy0xWnHLqHHMuB1vKM" charset="utf-8"></script>
  <script type="text/javascript">
    function initMap(){
        var options = {
            zoom:13,
            @foreach ($address as $k)
            center:{lat:{{ $k->logitude }},lng:{{ $k->latitude }}},
            @endforeach
        }

        var map = new google.maps.Map(document.getElementById('map'), options);

        var markers = [
          @foreach ($address as $k)
          {
            coords:{lat:{{ $k->logitude }},lng: {{ $k->latitude }} },
            content: `<span style="color:#f4633a">{{ $data->name }}</span><br>{!! $k->grades !!} <br> {{ $k->address }} <br> <i class="fa fa-phone" aria-hidden="true" style="color: #f4633a;"></i> {{ $k->phone }}`
          },
          @endforeach

        ];

        for(var i = 0;i < markers.length;i++){
            addMarker(markers[i]);
        }

        function addMarker(props){
            var marker = new google.maps.Marker({
                position:props.coords,
                map:map
            });

            let ico = {url:'{{url('/static/images/map-marker.svg')}}', size: new google.maps.Size(22, 22)};

            marker.setIcon(icon);

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
