<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <title>@hasSection('title')@yield('title') - @endif Academia Trilce</title>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
  <link rel="stylesheet" href="{{ mix('/css/main_academia.css') }}">
</head>
<body>

@hasSection('afterBody')
  {!! $print !!}
@endif

  <header>
    <div class="row between-xs">
      <div class="col-xs-2 logo">
        <a href="/academia/"><img src="{{{ asset('static/images/academia/logo.png') }}}" alt="Trilce"></a>
      </div>
      <div class="row col-xs col-sm-9 col-lg-10 end-xs pre-nav">
          <div class="col-xs-12 nav-info">
              <span class="nav-info-content"><a href="/"><i class="fa fa-home"></i></a> | <a href="http://intranet.trilce.edu.pe" target="_blank">Intranet para alumnos</a> | Call center: <b class="phone">6198100</b></span>
          </div>
          <div class="col-xs-12">
            <nav>
              <input type="checkbox" id="menu-toggle" />
              <div class="toogle-content">
                <label for="menu-toggle" class="label-toggle"><i class="fa fa-bars"></i></label>
              </div>
              
              <ul>
                <li class="nav-info-responsive">Intranet para alumnos | Call center: <b>6198100</b></li>
                <li class=""><a href="/academia/nosotros" class="{{ (Request::is('academia/nosotros')?'nav-item-active nav-item-noclick':'') }}">Nosotros</a></li>

                <li class="nav-venues xs-hide" id="sedes">
                  <a href="#" class="{{ (Request::is('academia/sede/*')?'nav-item-active':'') }}">Sedes</a>
                  <div class="dropdown-desk">
                    <div class="dropdown-desk-content dropdown-desk-academia">
                      <div>
                        <h3>UNI - San Marcos - PUCP</h3>
                        <ul>
                          <li><a href="/academia/sede/los-olivos" class="{{ (Request::is('academia/sede/los-olivos')?'nav-item-active nav-item-noclick':'') }}">Los Olivos</a></li>
                        </ul>
                      </div>
                      <div>
                        <h3>UNI - San Marcos</h3>
                        <ul>
                          <li><a href="/academia/sede/santa-beatriz" class="{{ (Request::is('academia/sede/santa-beatriz')?'nav-item-active nav-item-noclick':'') }}">Santa Beatriz</a></li>
                          <li><a href="/academia/sede/comas" class="{{ (Request::is('academia/sede/comas')?'nav-item-active nav-item-noclick':'') }}">Comas</a></li>
                          <li><a href="/academia/sede/villa-el-salvador" class="{{ (Request::is('academia/sede/villa-el-salvador')?'nav-item-active nav-item-noclick':'') }}">Villa el Salvador</a></li>
                        </ul>
                      </div>
                      <div>
                        <h3>UNI - PUCP</h3>
                        <ul>
                          <li><a href="/academia/sede/torrico" class="{{ (Request::is('academia/sede/torrico')?'nav-item-active nav-item-noclick':'') }}">Torrico</a></li>
                        </ul>
                      </div>
                      <div>
                        <h3>San Marcos</h3>
                        <ul>
                          <li><a href="/academia/sede/marsano" class="{{ (Request::is('academia/sede/marsano')?'nav-item-active nav-item-noclick':'') }}">Marsano</a></li>
                        </ul>
                      </div>
                      <div>
                        <h3>PUCP</h3>
                        <ul>
                          <li><a href="/academia/sede/san-isidro" class="{{ (Request::is('academia/sede/san-isidro')?'nav-item-active nav-item-noclick':'') }}">San Isidro</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="menu-click-sedes">
                  <a>Sedes </a>
                  <ul class="menu-sedes-ul">
                    <li><a href="/academia/sede/los-olivos">Los Olivos</a></li>
                    <li><a href="/academia/sede/santa-beatriz">Santa Beatriz</a></li>
                    <li><a href="/academia/sede/comas">Comas</a></li>
                    <li><a href="/academia/sede/villa-el-salvador">Villa el Salvador</a></li>
                    <li><a href="/academia/sede/torrico">Torrico</a></li>
                    <li><a href="/academia/sede/marsano">Marsano</a></li>
                    <li><a href="/academia/sede/san-isidro">San Isidro</a></li>
                  </ul>
                </li>
                
                <li class=""><a href="/academia/matricula-en-linea" class="{{ (Request::is('academia/matricula-en-linea')?'nav-item-active nav-item-noclick':'') }}">Matrícula en linea</a></li>
                <li class="disable"><a>Blog</a></li>
                <li class="disable"><a>Multimedia</a></li>
                <li class=""><a href="/academia/contacto" class="{{ (Request::is('academia/contacto')?'nav-item-active nav-item-noclick':'') }}">Contáctenos</a></li>
              </ul>
            </nav>
            
          </div>
      </div>
    </div>
  </header>
  
@yield('content')

@include('academia.layouts.parts.footer')

<script>
  var page;
  
@section('scripts')
</script>
<script src="{{ mix('/js/app_academia.js') }}" charset="utf-8"></script>
@show

</body>
</html>