<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <title>Colegio y Academia Trilce - Tu mejor opción</title>
      <meta name="description" content="Más de 38 años de Experiencia, Elevado nivel académico y desarrollo personal.">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}" type="image/x-icon" />
      <link rel="apple-touch-icon" href="{{{ asset('favicon.ico') }}}">
      <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
      <link rel="stylesheet" href="{{ mix('/css/main_home2.css') }}">
  </head>
  <body>
    <div class="home--logo">
      <div class="logo"></div>
      <div class="slogan">
        <h2 id="slogan-academia">EL LÍMITE LO PONES TÚ</h2>
        <h2 id="slogan-colegio">ALUMNOS MEJOR PREPARADOS</h2>
      </div>
    </div>

    <div class="home--float">
      <div class="home--float-boy">
        <img src="{{ url('/static/images/home2/boy.png') }}">
      </div>
      <div class="home--float-girl">
        <img src="{{ url('/static/images/home2/girl.png') }}">
      </div>
    </div>

    <div class="home--layers">
      <div id="scene" class="academia-layers">

          <div class="layer" data-depth="1.00">
            <img src="{{ url('/static/images/home2/png/academia-1.png') }}" alt="">
          </div>

          <div class="layer" data-depth="0.60">
            <img src="{{ url('/static/images/home2/png/academia-2.png') }}" alt="">
          </div>

          <div class="layer" data-depth="0.20">
            <img src="{{ url('/static/images/home2/png/academia-3.png') }}" alt="">
          </div>

      </div>

      <div class="colegio-layers" id="scene2">

          <div class="layer" data-depth="1.00">
            <img src="{{ url('/static/images/home2/png/colegio-1.png') }}" alt="">
          </div>

          <div class="layer" data-depth="0.60">
            <img src="{{ url('/static/images/home2/png/colegio-2.png') }}" alt="">
          </div>

          <div class="layer" data-depth="0.20">
            <img src="{{ url('/static/images/home2/png/colegio-3.png') }}" alt="">
          </div>


        </div>
    </div>



    <div class="home--cta">

      <ul class="footer-right-icons">
        <li><a href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n" title="Chatea con nosotros" target="_blank" rel="nofollow"><i class="fa fa-whatsapp"></i></a></li>
        <li><a href="https://twitter.com/TRILCEtweet" title="Siguenos en Twitter" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.facebook.com/ColegioTrilce/?pnref=lhc" title="Danos like en Facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook-f"></i></a></li>
        <li><a href="https://www.youtube.com/user/ColegiosTRILCEperu?sub_confirmation=1" title="Suscribete en Youtube" target="_blank" rel="nofollow"><i class="fa fa-youtube-play"></i></a></li>
        <li><a href="https://www.instagram.com/trilcecolegioacademia/" title="Siguenos en Instagram" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a></li>
      </ul>

      <div id="btnColegio" class="h-boton colegio animation-svg-border01 az">
        <a href="colegio">colegio</a>
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
          <rect x='0' y='0' fill='none' width='100%' height='100%'/>
        </svg>
      </div>
      <div id="btnAcademia" class="h-boton academia animation-svg-border01">
        <a href="academia">academia</a>
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
          <rect x='0' y='0' fill='none' width='100%' height='100%'/>
        </svg>
      </div>
    </div>

    <script src="{{ mix('/js/app_home2.js') }}" charset="utf-8"></script>
  </body>
</html>
