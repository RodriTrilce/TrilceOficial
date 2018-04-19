<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>@hasSection('title')@yield('title') - @endif Academia Trilce</title>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href=" {{{ asset('static/images/icons/favicon.ico') }}}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
  <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
</head>
<body>

@hasSection('afterBody')
  {!! $print !!}
@endif

  <header>
    <div class="row between-xs">
      <div class="col-xs-6 logo">
        <a href="/academia/"><img src="{{{ asset('static/images/academia/logo.png') }}}" alt="Trilce"></a>
      </div>
      <div class="row col-xs-6 end-xs pre-nav">
          <div class="col-xs-12 nav-info">
              <span><a href="/"><i class="fa fa-home"></i></a> | Intranet para alumnos | Call center: <b>6198100</b></span>
          </div>
          <div class="col-xs-12">
            <nav>
              <input type="checkbox" id="menu-toggle" />
              <div class="toogle-content">
                <label for="menu-toggle" class="label-toggle"><i class="fa fa-bars"></i></label>
              </div>
              
              <ul>
                <li>Intranet para alumnos | Call center: <b>6198100</b></li>
                <li><a href="/academia/nosotros">Nosotros</a></li>
                
                <li id="sedes">
                  <a href="#">Sedes</a>
                  <div class="dropdown-desk">
                    <div class="dropdown-desk-content">
                      <div>
                        <h3>UNMSM - UNI - PUCP</h3>
                        <ul>
                          <li><a href="/academia/sede/los-olivos">Los Olivos</a></li>
                        </ul>
                      </div>
                      <div>
                        <h3>UNMSM - UNI</h3>
                        <ul>
                          <li><a href="/academia/sede/santa-beatriz">Santa Beatriz</a></li>
                          <li><a href="/academia/sede/comas">Comas</a></li>
                          <li><a href="/academia/sede/villa-el-salvador">Villa el Salvador</a></li>
                        </ul>
                      </div>
                      <div>
                        <h3>UNI - PUCP</h3>
                        <ul>
                          <li><a href="/academia/sede/torrico">Torrico</a></li>
                        </ul>
                      </div>
                      <div>
                        <h3>UNMSM</h3>
                        <ul>
                          <li><a href="/academia/sede/marsano">Marsano</a></li>
                        </ul>
                      </div>
                      <div>
                        <h3>PUCP</h3>
                        <ul>
                          <li><a href="/academia/sede/san-isidro">San Isidro</a></li>
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
                
                <li class="disable"><a>Blog</a></li>
                <li class="disable"><a>Multimedia</a></li>
                <li><a href="/academia/contacto">Contáctenos</a></li>
              </ul>
            </nav>
            
          </div>
      </div>
    </div>
  </header>
  
@yield('content')

@include('academia.layouts.parts.footer')

@section('scripts')

<script src="http://www.trilce.edu.pe/assets/vendor/jquery/jquery.min.js"></script>
<script src="http://www.trilce.edu.pe/ztrilce/assets/vendor/sliderjs/jquery.slides.min.js"></script>
  
<script type="text/javascript">
  if (typeof page == 'undefined')
    var page = '';

  $(function() {
    $('#slides').slidesjs({
        width: 1500,
        height: 400,
        navigation: false,
        play: {
            active: true,
            auto: true,
            interval: 3000,
            swap: true,
            pauseOnHover: true,
            restartDelay: 2500
        }
    });
  });
</script>
<script src="{{ mix('/js/app_academia.js') }}" charset="utf-8"></script>
@show

</body>
</html>