<header>
  <div class="row between-xs header-web">
    <div class="row col-xs col-sm logo">
      <div class="col-xs-12"><a href="/academia/"><img src="{{{ asset('static/images/logos/logo-trilce-academia.svg') }}}" alt="Trilce Academia"></a></div>
    </div>
    <div class="row col-xs col-sm-9 col-lg-10 end-xs">
        <div class="col-xs-12 nav-info">
            <span class="nav-info-content"><a href="/"><i class="fa fa-home"></i></a> <span>|</span> <a href="http://app.trilce.edu.pe/App/" target="_blank">Intranet para alumnos</a> <span>|</span> Call center: <a class="phone" href="tel:+51016198100"><b>6198 100</b></a> <span>|</span> <a href="/menu-trilce" target="_blank">Menú Trilce</a> </span>
        </div>
        <div class="col-xs-12">
          <nav class="nav-burger">
            <input type="checkbox" id="menu-toggle" />
            <div class="toogle-content">
              <label for="menu-toggle" class="label-toggle"><i class="fa fa-bars"></i></label>
            </div>

            <ul>
              <li class="nav-info-responsive nav-info-academia">
                <div><a class="nav-info-colegio__intranet" href="http://app.trilce.edu.pe/App/" target="_blank">Intranet para alumnos</a></div>
                <div><a class="nav-info-colegio__phone" href="tel:016198100">Call center: <b>6198 100</b></a></div>
              </li>
              <li class="nav__highlight"><a href="/colegio">Colegio</a></li>

              <li class=""><a href="/academia/#inicios">Ciclos</a></li>
              <li class=""><a href="/academia/preinscripcion" class="{{ (Request::is('academia/preinscripcion')?'nav-item-active nav-item-noclick':'') }}">Preinscripción</a></li>
              <li class="nav-venues xs-hide" id="sedes">
                <a href="#" class="{{ (Request::is('academia/sede/*')?'nav-item-active':'') }}">Sedes</a>
                <div class="dropdown-desk">
                  <div class="dropdown-desk-content dropdown-desk-academia">
                    <div>
                      <h3>UNI - San Marcos - Católica</h3>
                      <ul>

                        <li class="{{ (Request::is('academia/sede/cercado-de-lima')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/cercado-de-lima">Cercado de Lima</a></li>

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
                      <h3>UNI - Católica</h3>
                      <ul>
                        <li class="{{ (Request::is('academia/sede/cercado-de-lima')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/cercado-de-lima">Cercado de Lima</a></li>
                      </ul>
                    </div>
                    <div>
                      <h3>San Marcos</h3>
                      <ul>
                        <li class="{{ (Request::is('academia/sede/marsano')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/marsano">Marsano</a></li>
                      </ul>
                    </div>
                    <div>
                      <h3>Católica</h3>
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
                  <li><a href="/academia/sede/cercado-de-lima">Cercado de Lima</a></li>
                  <li><a href="/academia/sede/marsano">Marsano</a></li>
                  <li><a href="/academia/sede/san-isidro">San Isidro</a></li>
                </ul>
              </li>
              <li class=""><a href="/academia/blog" class="{{ (Request::is('academia/blog*')?'nav-item-active':'') }}">Blog</a></li>
              <li class=""><a href="/academia/nosotros" class="{{ (Request::is('academia/nosotros')?'nav-item-active nav-item-noclick':'') }}">Nosotros</a></li>
              <li class=""><a target="_blank" href="/academia-sorteo-laptop/">SORTEOS</a></li>
              <li class=""><a href="/academia/contacto" class="{{ (Request::is('academia/contacto')?'nav-item-active nav-item-noclick':'') }}">Contáctanos</a></li>
            </ul>
          </nav>

        </div>
    </div>
  </div>
</header>
