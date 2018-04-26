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
        <link rel="preload" href="{{ mix('/css/others/_icons.css') }}" as="style">
        <link rel="stylesheet" href="{{ mix('/css/main_home.css') }}">
    </head>
    <body class="home-background">
      <div id="loader-wrapper">
          <div id="loader"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
      </div>
      <div class="h-all">
        <div class="h-content">
          <header>
            <div class="h-logo"></div>
            <nav>
              <ul>
                <li><a href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n" title="Chatea con nosotros" target="_blank" rel="nofollow"><i class="fa fa-whatsapp"></i></a></li>
                <li><a href="https://twitter.com/TRILCEtweet" title="Siguenos en Twitter" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/ColegioTrilce/?pnref=lhc" title="Danos like en Facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="https://www.youtube.com/user/ColegiosTRILCEperu?sub_confirmation=1" title="Suscribete en Youtube" target="_blank" rel="nofollow"><i class="fa fa-youtube-play"></i></a></li>
                <li><a href="https://www.instagram.com/trilcecolegioacademia/" title="Siguenos en Instagram" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </nav>
          </header>
          <section class="h-slogan">
            <h1><span>¡EL LÍMITE LO PONES TÚ!</span></h1>
          </section>

          <section class="h-cta">
            <div class="h-boton animation-svg-border01 az">
              <a href="colegio">colegio</a>
              <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <rect x='0' y='0' fill='none' width='100%' height='100%'/>
              </svg>
            </div>
            <div class="h-boton animation-svg-border01">
              <a href="academia">academia</a>
              <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <rect x='0' y='0' fill='none' width='100%' height='100%'/>
              </svg>
            </div>
          </section>
        </div>
        
        <section class="home-VideoBg" id="videoContainer">
          <video loop muted ref="video" id="videoTag">
          </video>
          <div class="home-VideoBg__content">
            <div class="home-overlay"></div>
          </div>
        </section>
      <script src="{{ mix('/js/app_home.js') }}" charset="utf-8"></script>
    </body>
</html>