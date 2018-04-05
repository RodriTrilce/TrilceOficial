<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@hasSection('title')@yield('title') - @endif Academia Trilce</title>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href=" {{{ asset('static/images/icons/favicon.ico') }}}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
  <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
</head>
<body>
  
  <header>
    <div class="row between-xs">
      <div class="col-xs-6 logo">
        <a href="/academia/"><img src="{{{ asset('static/images/academia/logo.png') }}}" alt="Trilce"></a>
      </div>
      <div class="col-xs-6 end-xs pre-nav">
          <div class="col-xs12 nav-info">
              <span>Intranet para alumnos | Call center: <b>6198100</b></span>
          </div>
          <div class="col-xs-12">
            <nav>
              <input type="checkbox" id="menu-toggle" />
              <div class="toogle-content">
                <label for="menu-toggle" class="label-toggle"><i class="fa fa-bars"></i></label>
              </div>
              
              <ul>
                <li>Intranet para alumnos | Call center: <b>6198100</b></li>
                <li><a href="#">Nosotros</a></li>
                
                <li>
                  <a href="#">Sedes</a>
                  <div class="dropdown-desk">
                    <div class="dropdown-desk-content">
                      <div>
                        <h3>San Marcos - UNI - PUCP</h3>
                        <ul>
                          <li><a href="/academia/sede/los-olivos">Los Olivos</a></li>
                        </ul>
                      </div>
                      <div>
                        <h3>San Marcos - UNI</h3>
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
                        <h3>San Marcos</h3>
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
                
                <li><a href="/academia/blog">Blog</a></li>
                <li><a href="/academia/multimedia">Multimedia</a></li>
                <li><a href="/contacto">Contáctenos</a></li>
              </ul>
            </nav>
            
          </div>
      </div>
    </div>
  </header>
  
@yield('content')

<footer>
  <div class="row">
    <div class="col-xs-12 footer-top"><span>Usted está aquí: <b>Academia</b></span></div>
    <div class="row between-xs center-xs footer-menu">
      <div class="col-xs-6">
        <ul>
            <li><a href="/colegio">Colegio</a></li>
            <li><a href="/academia">Academia</a></li>
            <li><a href="#">Vacaciones útiles</a></li>
            <li><a href="#">Menú</a></li>
        </ul>
      </div>
      <div class="col-xs-6">
          <ul class="footer-right-icons">
            <li><a href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n" title="Chatea con nosotros" target="_blank" rel="nofollow"><i class="fa fa-whatsapp"></i></a></li>
            <li><a href="https://twitter.com/TRILCEtweet" title="Siguenos en Twitter" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/ColegioTrilce/?pnref=lhc" title="Danos like en Facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="https://www.youtube.com/user/ColegiosTRILCEperu?sub_confirmation=1" title="Suscribete en Youtube" target="_blank" rel="nofollow"><i class="fa fa-youtube-play"></i></a></li>
            <li><a href="https://www.instagram.com/trilcecolegioacademia/" title="Siguenos en Instagram" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a></li>
            <li>© {{date("Y")}} Trilce. Todos los derechos reservados</li>
          </ul>
      </div>
    </div>
    <div class="col-xs-12 center-xs footer-bottom">
      © {{date("Y")}} Trilce. Todos los derechos reservados | <a href="/academia/contacto">Contáctenos</a>
    </div>
  </div>
</footer>

@section('scripts')

<script src="http://www.trilce.edu.pe/assets/vendor/jquery/jquery.min.js"></script>
<script src="http://www.trilce.edu.pe/ztrilce/assets/vendor/sliderjs/jquery.slides.min.js"></script>
  
<script type="text/javascript">
  if (typeof page == 'undefined') {
    var page = '';
  }

  /*slider open*/
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
  /*slider close*/
</script>
<script src="{{ mix('/js/app_academia.js') }}" charset="utf-8"></script>
@show

</body>
</html>