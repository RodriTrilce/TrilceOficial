<div class="row col-xs-12 center-xs preparation__section">
    <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-md preparation__title">
      <h1 class="preparation__title">¡Estudia con los mejores!</h1>
      <h3 class="preparation__subtitle">Encuentra todos nuestros ciclos disponibles</h3>
    </div>
</div>

@include('academia.partials.preparation.search')

<div class="row col-xs-12 center-xs preparation__section">
    <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-md preparation__title">
      <h1 class="preparation__title preparation__title--and">También contamos con la preparación</h1>
    </div>
</div>
  <div class="row col-xs-12 center-xs beginning beginning-minus container-base">
      <div class="row col-xs-12 col-sm-3 col-md-3 start-xs start-sm start-md beginning-container beginning-minus">


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
