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
        <div class="col-xs-12 venue-info-title"><h2 class="colegio">{{ $data->name}}</h2></div>
        <div class="row col-xs-12 col-sm-12 table-responsive venue-content-editable" id="tableade">

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
                  <td data-label="Dirección">{{ $k->address }}</td>
                  <td data-label="Teléfono">{{ $k->phone }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>

          {!!$data->content!!}
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
