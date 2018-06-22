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

  <div class="row col-xs-12 center-xs beginning beginning-minus container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-sm center-md">
      <div class="row col-xs-12 col-sm-8 col-md-7 start-xs start-sm start-md beginning-container beginning-minus">

        <div class="col-xs beginning--item @if($type=='uni') beginning--item-active @endif">
          <a href="/academia/preparacion-uni" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-uni.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">UNI</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($type=='san-marcos') beginning--item-active @endif">
          <a href="/academia/preparacion-san-marcos" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-unmsm.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">SAN MARCOS</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($type=='pucp') beginning--item-active @endif">
          <a href="/academia/preparacion-pucp" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-pucp.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">PUCP</span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>


  <div class="row col-xs-12 center-xs nuevos-i-list container-base">

    <div class="row col-xs-12 col-sm-9 col-md-8 start-md start-xs start-sm nuevos-i-list-selects">
      <div class="col-xs-12 col-sm">
        <select>
          <option value="volvo">Ciclos...</option>
          <option value="saab">Saab</option>
          <option value="mercedes">Mercedes</option>
          <option value="audi">Audi</option>
        </select>
      </div>

      <div class="col-xs-12 col-sm">
        <select>
          <option value="volvo">Sedes...</option>
          <option value="saab">Saab</option>
          <option value="mercedes">Mercedes</option>
          <option value="audi">Audi</option>
        </select>
      </div>
      <div class="col-xs-12 col-sm">
        <select>
          <option value="volvo">Turnos...</option>
          <option value="saab">Saab</option>
          <option value="mercedes">Mercedes</option>
          <option value="audi">Audi</option>
        </select>
      </div>
    </div>

    <div class="row col-xs-12 col-sm-9 col-md-8 start-sm start-xs around-xs nuevos-i-list-data">
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
