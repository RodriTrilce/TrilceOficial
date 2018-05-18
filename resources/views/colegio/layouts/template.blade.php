<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <title>@hasSection('title')@yield('title') - @endif Colegio Trilce</title>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
  <link rel="stylesheet" href="{{ mix('/css/main_colegio.css') }}">
</head>
<body>

@hasSection('afterBody')
  {!! $print !!}
@endif

  <header>
    <div class="row between-xs">
      <div class="col-xs-2 logo">
        <a href="/colegio"><img src="{{{ asset('static/images/colegio/logo-colegio.png') }}}" alt="Trilce"></a>
      </div>
      <div class="row col-xs col-sm-9 col-lg-10 end-xs pre-nav">
          <div class="col-xs-12 nav-info">
              <span class="nav-info-content nav-info-colegio"><a href="/"><i class="fa fa-home"></i></a> | <a href="http://intranet.trilce.edu.pe" target="_blank">Intranet para alumnos</a> | Call center: <b class="phone">6198100</b></span>
          </div>
          <div class="col-xs-12">
            <nav class="nav-colegio-structure">
              <input type="checkbox" id="menu-toggle" />
              <div class="toogle-content">
                <label for="menu-toggle" class="label-toggle"><i class="fa fa-bars"></i></label>
              </div>
              
              <ul>
                <li class="nav-info-responsive nav-info-colegio">Intranet para alumnos | Call center: <b class="phone">6198100</b></li>
                
                <li class="nav-colegio-aboutus {{ (Request::is('colegio/nosotros')?'active':'') }}">
                  <a href="/colegio/nosotros">Nosotros</a>
                  <div class="dropdown-desk xs-hide-force">
                    <div class="dropdown-desk-content dropdown-desk-colegio-aboutus">
                      <div class="row col-xs-12">
                        <a href="/colegio/propuesta-educativa" class="dd-colegio-aboutus-link">
                          <div class="row col-xs-4 dd-colegio-aboutus-textleft">
                            <h2><i class="fa fa-graduation-cap"></i> Propuesta educativa</h2>
                          </div>
                          
                          <div class="col-xs dd-colegio-aboutus-rocket"></div>
                          
                          <div class="row col-xs dd-colegio-aboutus-textright">
                            <h2>Vive la aventura de estudiar en Trilce.<br /> Comienza el viaje..</h2>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>

                <!-- Only mobile -->
                <li class="nav-colegio-aboutusmobile">
                  <a href="/colegio/propuesta-educativa" class="aboutusmobile-link"><img src="{{url('static/images/colegio/imagen-menu-pe-movil.jpg')}}" alt="Propuesta educativa"></a>
                </li>
                
                <li class="nav-venues {{ (Request::is('colegio/sede/*')?'active':'') }} xs-hide" id="sedes">
                  <a href="#">Sedes</a>
                  <div class="dropdown-desk">
                    <div class="dropdown-desk-content dropdown-desk-colegio">

                      <div class="row col-xs-12">
                        <div class="row col-xs-8">
                          
                          <div class="col-xs-3 venues-in">
                            <h3 class="title"><i class="fa fa-map-marker marker"></i><br> Sedes en <br><strong>Lima</strong></h3>
                          </div>
                          
                          <div class="row col-xs linkslima block-capital">
                            <div class="col-xs">
                              <ul class="ul-venue">
                                <option value="/colegio/sede/brena">Breña</option>
                                <option value="/colegio/sede/callao">Callao</option>
                                <option value="/colegio/sede/chorrillos">Chorrillos</option>
                                <option value="/colegio/sede/comas">Comas</option>
                                <option value="/colegio/sede/los-olivos">Los Olivos</option>
                                <option value="/colegio/sede/maranga">Maranga</option>
                                <option value="/colegio/sede/pro">Pro</option>
                                <option value="/colegio/sede/santa-beatriz-roma">Santa Beatriz (Roma)</option>
                                <option value="/colegio/sede/jesus-maria-salaverry">Jesús María (Salaverry)</option>
                              </ul>
                            </div>
                            <div class="col-xs">
                              <ul class="ul-venue">
                                <option value="/colegio/sede/surco">Surco</option>
                                <option value="/colegio/sede/san-isidro">San Isidro</option>
                                <option value="/colegio/sede/villa-maria">Villa María</option>
                                <option value="/colegio/sede/villa-el-salvador">Villa El Salvador</option>
                                <option value="/colegio/sede/la-molina">La Molina</option>
                                <option value="/colegio/sede/salamanca">Salamanca</option>
                                <option value="/colegio/sede/santa-anita">Santa Anita</option>
                                <option value="/colegio/sede/san-juan-de-lurigancho">San Juan de Lurigancho</option>
                                <option value="/colegio/sede/san-juan-de-lurigancho-wiesse">San Juan de Lurigancho (Wiesse)</option>
                              </ul>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row col-xs-4 block-province">
                          <div class="col-xs venues-in titleblockprovincia">
                            <h3 class="title provincia"><i class="fa fa-map-marker marker"></i><br> Sedes en <br><strong>Provincia</strong></h3>
                          </div>
                          <div class="col-xs linksprovincia">
                            <ul class="ul-venue">
                              <li class="item item2"><a href="/colegio/sede/arequipa">Arequipa</a></li>
                              <li class="item item2"><a href="/colegio/sede/chiclayo">Chiclayo</a></li>
                              <li class="item item2"><a href="/colegio/sede/chanchamayo">Chanchamayo</a></li>
                              <li class="item item2"><a href="/colegio/sede/huancayo">Huancayo</a></li>
                              <li class="item item2"><a href="/colegio/sede/piura">Piura</a></li>
                              <li class="item item2"><a href="/colegio/sede/trujillo">Trujillo</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                  </div>
                </li>

                <li class="{{ (Request::is('colegio/admision*')?'active':'') }}"><a href="/colegio/admision-nuevo">Admisión</a></li>

                <!-- Only mobile -->
                <li class="menu-click-sedes">
                  <a>Sedes </a>
                  <div class="menu-colegio-sedes">
                    <select class="menu-colegio-sedes-select" id="selectRedirectLima" onchange="location = this.value;">
                       <option value="" selected disabled hidden>Colegios en Lima</option>
                       <option value="/colegio/sede/brena">Breña</option>
                       <option value="/colegio/sede/callao">Callao</option>
                       <option value="/colegio/sede/chorrillos">Chorrillos</option>
                       <option value="/colegio/sede/comas">Comas</option>
                       <option value="/colegio/sede/los-olivos">Los Olivos</option>
                       <option value="/colegio/sede/maranga">Maranga</option>
                       <option value="/colegio/sede/pro">Pro</option>
                       <option value="/colegio/sede/santa-beatriz-roma">Santa Beatriz (Roma)</option>
                       <option value="/colegio/sede/jesus-maria-salaverry">Jesús María (Salaverry)</option>
                       <option value="/colegio/sede/surco">Surco</option>
                       <option value="/colegio/sede/san-isidro">San Isidro</option>
                       <option value="/colegio/sede/villa-maria">Villa María</option>
                       <option value="/colegio/sede/villa-el-salvador">Villa El Salvador</option>
                       <option value="/colegio/sede/la-molina">La Molina</option>
                       <option value="/colegio/sede/salamanca">Salamanca</option>
                       <option value="/colegio/sede/santa-anita">Santa Anita</option>
                       <option value="/colegio/sede/san-juan-de-lurigancho">San Juan de Lurigancho</option>
                       <option value="/colegio/sede/san-juan-de-lurigancho-wiesse">San Juan de Lurigancho (Wiesse)</option>
                    </select>
                    <select class="menu-colegio-sedes-select" id="selectRedirectProvince" onchange="location = this.value;">
                       <option value="" selected disabled hidden>Colegios en Provincia</option>
                       <option value="/colegio/sede/arequipa">Arequipa</option>
                       <option value="/colegio/sede/chiclayo">Chiclayo</option>
                       <option value="/colegio/sede/chanchamayo">Chanchamayo</option>
                       <option value="/colegio/sede/huancayo">Huancayo</option>
                       <option value="/colegio/sede/piura">Piura</option>
                       <option value="/colegio/sede/trujillo">Trujillo</option>
                    </select>
                  </div>
                </li>

                <li class="disable"><a>Blog</a></li>
                <li class="disable"><a>Multimedia</a></li>
                <li class="{{ (Request::is('colegio/contacto')?'active':'') }}"><a href="/colegio/contacto">Contáctenos</a></li>
              </ul>
            </nav>
            
          </div>
      </div>
    </div>
  </header>
  
@yield('content')

@include('colegio.layouts.parts.footer')

<script>
  var page;
  
  @section('scripts')
</script>
<script src="{{ mix('/js/app_colegio.js') }}" charset="utf-8"></script>
@show

</body>
</html>