{{! $breadcrumbs = Breadcrumbs::render('academia-preparation', $type) }}
@extends('academia.layouts.template')
@section('title', 'Preparación ' . $title)
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-1"></div>
      
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Nuevos Inicios</h1>
        <p>Elije la preparación universitaria,<br /> exclusiva que está buscando</p>
      </div>
    </div>
  </div>

  <div class="nuevos-i nuevos-i-force-minus container-base">
    <div class="row center-xs">
      <div class="row nuevos-i-box col-xs-12 col-md-9 col-sm-12 between-xs center-sm center-md center-lg nuevos-i-border">

        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 @if($type=='uni') nuevos-i-active @endif">
          <a href="/academia/preparacion-uni">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/ico-logo-uni.jpg" alt="UNI">
              <h4>Preparación</h4>
              <h3>UNI</h3>
            </div>
            <div class="nuevos-i-bottom">
              <hr>
              <span>Más información <i class="fa fa-search"></i></span>
            </div>
          </a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 @if($type=='san-marcos') nuevos-i-active @endif">
          <a href="/academia/preparacion-san-marcos">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/ico-logo-sm.jpg" alt="UNMSM">
              <h4>Preparación</h4>
              <h3>UNMSM</h3>
            </div>
            <div class="nuevos-i-bottom">
              <hr>
              <span>Más información <i class="fa fa-search"></i></span>
            </div>
          </a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 @if($type=='pucp') nuevos-i-active @endif">
          <a href="/academia/preparacion-pucp">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/ico-logo-cato.jpg" alt="PUCP">
              <h4>Preparación</h4>
              <h3>PUCP</h3>
            </div>
            <div class="nuevos-i-bottom">
              <hr>
              <span>Más información <i class="fa fa-search"></i></span>
            </div>
          </a>
        </div>
        
      </div>
    </div>
  </div>

  <div class="row col-xs-12 center-sm nuevos-i-list container-base">
    <div class="row col-xs-12 col-md-12 center-md center-xs nuevos-i-list-selects">
      <div class="col-xs-12 col-sm-3 col-md-2">
        <select>
          <option value="volvo">Ciclos...</option>
          <option value="saab">Saab</option>
          <option value="mercedes">Mercedes</option>
          <option value="audi">Audi</option>
        </select>
      </div>
      
      <div class="col-xs-12 col-sm-3 col-md-2">
        <select>
          <option value="volvo">Sedes...</option>
          <option value="saab">Saab</option>
          <option value="mercedes">Mercedes</option>
          <option value="audi">Audi</option>
        </select>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-2">
        <select>
          <option value="volvo">Turnos...</option>
          <option value="saab">Saab</option>
          <option value="mercedes">Mercedes</option>
          <option value="audi">Audi</option>
        </select>
      </div>
    </div>

    
    <div class="row col-xs-12 col-sm-10 start-sm start-xs around-xs nuevos-i-list-data">
      <div class="row col-xs-12 ii-ul">
        
        <!-- bucle -->
        <div class="col-xs-12 ii-ul-bucle-item">
          <div class="col-xs-12"><h3>Comas</h3></div>
          <div class="row col-xs-12 col-md-12 ii-li">
            <div class="col-xs-4 col-sm-3 ii i-cycle">Anual</div>
            <div class="col-xs col-sm-3 ii i-turn">Mañana</div>
            <div class="col-xs-12 col-md-3 ii i-date">12/03/2018 - 02/12/2018</div>
            <div class="col-xs-4 col-md center-md ii i-money">S/250</div>
            <div class="col-xs-8 col-md end-md ii i-horary"><b>L-S</b> 08:00-15:00</div>
          </div>
          <div class="row col-xs-12 col-md-12 ii-li">
            <div class="col-xs-4 col-sm-3 ii i-cycle">Anual</div>
            <div class="col-xs col-sm-3 ii i-turn">Mañana</div>
            <div class="col-xs-12 col-md-3 ii i-date">12/03/2018 - 02/12/2018</div>
            <div class="col-xs-4 col-md center-md ii i-money">S/250</div>
            <div class="col-xs-8 col-md end-md ii i-horary"><b>L-S</b> 08:00-15:00</div>
          </div>
        </div>
        <!-- end bucle -->
        
        
      </div>
    </div><!--end list-data-->
    
  </div>
  
</div>
    
@include('academia.partials.card_bottom')
@endsection

@section('scripts')
  page = 'preparation';
@parent

@endsection