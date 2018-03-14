<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>App Name - @yield('title')</title>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <link rel="shortcut icon" href=" {{{ asset('static/images/icons/favicon.ico') }}}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
  <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
</head>
<body>
  

  <div class="ac-container">
    <header>
      <div class="row between-xs">
        <div class="col-xs-6 logo">
          <img src="{{{ asset('static/images/academia/logo.png') }}}" alt="">
        </div>
        <div class="col-xs-6 end-xs">
            <div class="col-xs12">
              <section>
                <span>Intranet para alumnos | Call center: <i>6198100</i></span>
            </div>
            <div class="col-xs12">
              <nav>
                <input type="checkbox" id="menu-toggle" />
                <div class="toogle-content">
                  <label for="menu-toggle" class="label-toggle"><i class="fa fa-bars"></i></label>
                </div>
                
                <ul>
                  <li>Intranet para alumnos | Call center: <i>6198100</i></li>
                  <li><a href="#">Nosotros</a></li>
                  <li><a href="#">Sedes</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Multimedia</a></li>
                  <li><a href="#">Contáctenos</a></li>
                </ul>
              </nav>
            </div>
        </div>
      </div>
    </header>
  </div>
  
  
  <!--
  @section('sidebar')
      This is the master sidebar.
  @show

  <div class="container">
      @yield('content')
  </div>
  
-->

<footer> <span>Usted está aquí: <b>Inicio</b></span> <hr> <section
class="footer-l1"> <ul> <li>Colegios</li> <li>Academias</li> <li>Vacaciones
útiles</li> <li>Locales</li> <li>Menú</li> </ul> </section> <section
class="footer-l2"> <span>Sigamos conectados</span> <ul> <li></li> <li></li>
<li></li> <li></li> <li></li> </ul> <span>Todos los derechos Reservados</span>
</section> </footer>
  
</body>
</html>