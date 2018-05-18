{{! $breadcrumbs = Breadcrumbs::render('colegio-admission', $data->name) }}
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
  
  <div class="venue venue-colegio">
    <div>
      <h2 class="venue-colegio-h2">{{ $data->name }}</h2>
      <div class="venues-hr"></div>
      
      <div class="row col-xs-12 col-sm-11">
        
        <div class="row col-xs venue-colegio-table-block venue-colegio-table-line venue-colegio-table-block1">
          <div class="col-xs-12"></div>
          @foreach ($address as $k)
            <div class="col-xs-12"><span class="venue-colegio-title-span">{{ $k->grades }}</span></div>
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
    <div class="map-container">
      <div id="map"></div>
    </div>
  </div>
  
  
  <div class="row col-xs-12 center-xs venue-colegio-investment">
    <div class="row col-xs-12 col-sm-9 start-xs investment-container">

      <div class="row col-xs-12 col-sm-3 investment-title">
        <h3>Inversión</h3>
      </div>
      
      <div class="row col-xs-12 col-sm investment-block">
        
        @foreach ($investment as $k)
          <div class="row col-xs-12 investment-block-item">
            <div class="col-xs"><span class="venue-colegio-title-span"><strong>{{$k->range}}</strong></span></div>
            
            @if($k->admissionfee)
            <div class="col-xs"><span class="venue-colegio-title-span">Cuota de ingreso: {{ $k->admissionfee }}</span></div>
            @endif

            @if($k->enrollment)
            <div class="col-xs"><span class="venue-colegio-title-span">Matrícula: {{ $k->enrollment }}</span></div>
            @endif

            @if($k->monthlypayment)
            <div class="col-xs"><span class="venue-colegio-title-span">Mensualidad: {{ $k->monthlypayment }}</span></div>
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
              // Map options
              var options = {
                  zoom:16,
                  center:{lat:-12.075226,lng:-77.038176}/*poner al centro para que se muestre las 2 cordenadas*/
              }

              var map = new google.maps.Map(document.getElementById('map'), options);


              var markers = [
                  {
                      coords:{lat:-12.074882,lng:-77.039687},
                      iconImage:'http://www.trilce.edu.pe/assets/img/map-marker_1.png',
                      content:'<span style="color:#f4633a">Sede Salaverry</span><br>Nivel Primaia <br> Av. Cuba 414-438 <br> <i class="fa fa-phone" aria-hidden="true" style="color: #f4633a;"></i> 619-8118'
                  },
                  {
                      coords:{lat:-12.074607,lng:-77.039725},
                      iconImage:'http://www.trilce.edu.pe/assets/img/map-marker_1.png',
                      content:'<span style="color:#f4633a">Sede Salaverry</span><br>Nivel Secundaria 1.<sup>o</sup> a 3.<sup>o</sup><br> Calle Almte. Guisse 964 <br> <i class="fa fa-phone" aria-hidden="true" style="color: #f4633a;"></i> 619-8118 '
                  },
                  {
                      coords:{lat:-12.078227,lng:-77.035225},
                      iconImage:'http://www.trilce.edu.pe/assets/img/map-marker_1.png',
                      content:'<span style="color:#f4633a">Sede Salaverry</span><br>Nivel Secundaria 4.<sup>o</sup> a 5.<sup>o</sup><br> Av. Arequipa 1381 <br> <i class="fa fa-phone" aria-hidden="true" style="color: #f4633a;"></i> 727-1590'
                  }
              ];

              // Loop through markers
              for(var i = 0;i < markers.length;i++){
                  // Add marker
                  addMarker(markers[i]);
              }

              // Add Marker Function
              function addMarker(props){
                  var marker = new google.maps.Marker({
                      position:props.coords,
                      map:map,
                      //icon:props.iconImage
                  });

  /*
                  // Check for customicon
                  if(props.iconImage){
                      // Set icon image
                      marker.setIcon(props.iconImage);
                  }
  */
                  // Check content
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

initMap()
  </script>
@endsection