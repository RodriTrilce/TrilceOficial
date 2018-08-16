<!DOCTYPE html>
<html lang="en">
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
  <link rel="stylesheet" href="{{ mix('/css/main_home4.css') }}">

</head>
<body>

  <div class="container">
    <div class="logo"></div>

    <div class="container-page container-colegio" id="colegio">
      <div class="box-video">
        <video loop preload="auto" src="{{ url('/static/images/home4/intro_colegio.mp4') }}" class="video-page video-colegio" id="video-colegio"></video>
      </div>
      <div class="box">
        <div class="text-cta">
          <a href="">
            <h2>Colegio</h2>
            <div class="icon"><i class="fa fa-play"></i></div>
          </a>
        </div>
        <div class="human rat">
          <img src="{{ url('/static/images/home4/boy.png') }}" alt="">
        </div>
      </div>

      {{-- <section class="buttons">
        <button class="draw">Draw</button>
      </section> --}}


      {{-- <div class="box-trilce">
        <div class="svg-wrapper">
          <svg xmlns="http://www.w3.org/2000/svg">
            <rect class="shape" />
            <div class="text">hola</div>
          </svg>
        </div>
      </div> --}}

    </div>

    <div class="container-page container-academia" id="academia">
      <div class="box-video">
        <video loop preload="auto" src="{{ url('/static/images/home4/intro_academia.mp4') }}" class="video-page video-academia" id="video-academia"></video>
      </div>
      <div class="box">
        <div class="human waifu">
          <img src="{{ url('/static/images/home4/girl.png') }}" alt="">
        </div>
        <div class="text-cta">
          <a href="">
            <h2>Academia</h2>
            <div class="icon"><i class="fa fa-play"></i></div>
          </a>
        </div>
      </div>
    </div>

    <div class="footer"></div>
  </div>



  <script src="{{ mix('/js/app_home4.js') }}" charset="utf-8"></script>
</body>
</html>
