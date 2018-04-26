<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <title>404 - La página que buscas no existe - Trilce</title>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href=" {{{ asset('static/images/icons/favicon.ico') }}}" type="image/x-icon" />
  <link rel="prefetch" href="{{ mix('/css/others/_icons.css') }}" as="style">
  <link rel="stylesheet" href="{{ mix('/css/main_academia.css') }}">
</head>
<body>
  <header>
    <div class="row between-xs">
      <div class="col-xs-6 logo">
        <a href="/academia/"><img src="{{{ asset('static/images/logo-void.png') }}}" alt="Trilce"></a>
      </div>
      <div class="col-xs-6 end-xs pre-nav"></div>
    </div>
  </header>

  <div class="row center-xs center-sm error-404">
    <div class="col-xs-10 col-sm-4 ">
      <div class="row col-xs">
        <div class="col-xs">
          <div></div>
          <img src="{{{ asset('/static/images/oops-404.png') }}}" alt="La página que buscas no existe.">
        </div>
        <div class="col-xs-4 text">
          <div></div>
          <h1>La página que buscas no existe.</h1>
          <p>Te invitamos a seguir navegando en nuestra web en el siguiente enlace <br /> <a href="http://www.trilce.edu.pe/">#EstoEsTrilce</a></p>
        </div>
      </div>
    </div>
  </div>

  @include('academia.layouts.parts.footer')
</body>
</html>