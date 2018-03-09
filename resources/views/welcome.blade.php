<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Colegio y Academia Trilce - Tu mejor opción</title>
        <meta name="description" content="Más de 38 años de Experiencia, Elevado nivel académico y desarrollo personal">
        
        <link rel="shortcut icon" href="static/images/icons/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="static/images/icons/favicon.ico">
        
        <!-- <link rel="stylesheet" href="{{ mix('/css/app.css') }}"> -->
        <link rel="stylesheet" href="{{ mix('/css/index.css') }}">
    </head>
    <body>
      <div id="loader-wrapper">
          <div id="loader"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
      </div>
      
      <div id="k">
        <video-bg class="home-bg" :sources="['http://www.trilce.edu.pe/ztrilce2/assets/video/video_home.mp4']" img="/static/images/home/home_movil.png">
          <!-- If you want to add content here, a slot is waiting! -->
          <div class="home-overlay"></div>
          <section>
            
          </section>
        </video-bg>
      </div>
      <script src="{{ mix('/js/app.js') }}" charset="utf-8"></script>
    </body>
</html>