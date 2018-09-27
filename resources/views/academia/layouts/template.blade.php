
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">

    {!! Meta::tag('title') !!}
    {!! Meta::tag('description') !!}
    {!! Meta::tag('robots') !!}
    {!! Meta::tag('url', Request::url()); !!}

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ mix('/css/main.css') }}?{{rand(0,999999)}}">
  <link rel="stylesheet" href="{{ mix('/css/main_academia.css') }}?{{rand(0,999999)}}">
</head>
<body>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  @yield('afterBody')

  <div class="modal">
    <div class="modal-inner">
      <span data-modal-close>&times;</span>
      <div class="modal-content"></div>
    </div>
  </div>

  <header>
    <div class="row between-xs header-web">
      <div class="row col-xs col-sm logo">
        <div class="col-xs-12"><a href="/academia/"><img src="{{{ asset('static/images/logos/logo-trilce-academia.svg') }}}" alt="Trilce Academia"></a></div>
      </div>
      <div class="row col-xs col-sm-9 col-lg-10 end-xs">
          <div class="col-xs-12 nav-info">
              <span class="nav-info-content"><a href="/"><i class="fa fa-home"></i></a> <span>|</span> <a href="http://intranet.trilce.edu.pe/" target="_blank">Intranet para alumnos</a> <span>|</span> Call center: <a class="phone" href="tel:+51016198100"><b>619-8100</b></a></span>
          </div>
          <div class="col-xs-12">
            <nav class="nav-burger">
              <input type="checkbox" id="menu-toggle" />
              <div class="toogle-content">
                <label for="menu-toggle" class="label-toggle"><i class="fa fa-bars"></i></label>
              </div>

              <ul>
                <li class="nav-info-responsive nav-info-academia"><a class="nav-info-academia__intranet" href="http://intranet.trilce.edu.pe/" target="_blank">Intranet para alumnos</a> | Call center: <a class="nav-info-academia__phone" href="tel:+51016198100"><b>619-8100</b></a></li>

                <li class=""><a href="/academia/nosotros" class="{{ (Request::is('academia/nosotros')?'nav-item-active nav-item-noclick':'') }}">Nosotros</a></li>

                <li class="nav-venues xs-hide" id="sedes">
                  <a href="#" class="{{ (Request::is('academia/sede/*')?'nav-item-active':'') }}">Sedes</a>
                  <div class="dropdown-desk">
                    <div class="dropdown-desk-content dropdown-desk-academia">
                      <div>
                        <h3>UNI - San Marcos - PUCP</h3>
                        <ul>
                          <li class="{{ (Request::is('academia/sede/los-olivos')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/los-olivos">Los Olivos</a></li>
                        </ul>
                      </div>
                      <div>
                        <h3>UNI - San Marcos</h3>
                        <ul>
                          <li class="{{ (Request::is('academia/sede/santa-beatriz')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/santa-beatriz">Santa Beatriz</a></li>
                          <li class="{{ (Request::is('academia/sede/comas')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/comas">Comas</a></li>
                          <li class="{{ (Request::is('academia/sede/villa-el-salvador')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/villa-el-salvador">Villa El Salvador</a></li>
                        </ul>
                      </div>
                      <div>
                        <h3>UNI - PUCP</h3>
                        <ul>
                          <li class="{{ (Request::is('academia/sede/torrico')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/torrico">Torrico</a></li>
                        </ul>
                      </div>
                      <div>
                        <h3>San Marcos</h3>
                        <ul>
                          <li class="{{ (Request::is('academia/sede/marsano')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/marsano">Marsano</a></li>
                        </ul>
                      </div>
                      <div>
                        <h3>PUCP</h3>
                        <ul>
                          <li class="{{ (Request::is('academia/sede/san-isidro')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/san-isidro">San Isidro</a></li>
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
                    <li><a href="/academia/sede/villa-el-salvador">Villa El Salvador</a></li>
                    <li><a href="/academia/sede/torrico">Torrico</a></li>
                    <li><a href="/academia/sede/marsano">Marsano</a></li>
                    <li><a href="/academia/sede/san-isidro">San Isidro</a></li>
                  </ul>
                </li>

                <li class=""><a href="/academia/matricula-en-linea" class="{{ (Request::is('academia/matricula-en-linea')?'nav-item-active nav-item-noclick':'') }}">Prematrícula</a></li>
                <li class=""><a href="/academia/blog" class="{{ (Request::is('academia/blog*')?'nav-item-active':'') }}">Blog</a></li>
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
