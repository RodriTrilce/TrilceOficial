<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

        <title>Colegio y Academia Trilce - Tu mejor opción</title>
        <meta name="description" content="Más de 38 años de Experiencia, Elevado nivel académico y desarrollo personal">
        
        <link rel="shortcut icon" href="static/images/icons/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="static/images/icons/favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
        
        <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
    </head>
    <body>
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
            <div class="h-boton"><a href="#">colegio</a></div>
            <div class="h-boton"><a href="academia/">academia</a></div>
          </section>
        </div>
        
        <div id="h-k">
          <video-bg class="home-bg" :sources="['static/video/home_a.webm', 'static/video/home_b.mp4']" img="static/images/home/home_movil.png">
            <div class="home-overlay"></div>
          </video-bg>
        </div>
      </div>
      <script src="{{ mix('/js/app.js') }}" charset="utf-8"></script>
    </body>
</html>