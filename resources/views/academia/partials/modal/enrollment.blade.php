@if (session('enrollment'))
  <div id="modal-1" style="display:none;">
    <div class="modal-b50">
      <div class="row col-xs-12 center-xs enrollment-finish">
          <div class="col-xs-12">
              <div class="row col-xs-12 center-xs">
                <img src="{{url('/static/images/academia/svg/icon-thanks-enrolltment.svg')}}" class="finish-thanks" alt="Gracias por inscribirse">
              </div>
            <br>
            <h1 class="finish-title">Gracias por registrarte.</h1>
          </div>
          <div class="col-xs-12">
            <p class="finish-text">
              Para inscribirte, acércate con tu ficha de inscripción y tu DNI a la sede de tu preferencia.
              <br>
              Descarga tu ficha de inscripción aquí: </p>
          </div>
          <div class="col-xs-12 finish-button-container">
            <form action="/academia/preinscripcion/descargar-pdf" method="post" target="_blank">
              {{ csrf_field() }}
              <input name="token" type="hidden" value="{{ session('dni') }}">
              <button type="submit" class="enrollment-finish--button">
                <img src="{{url('/static/images/academia/svg/icon-thanks-download-enrollment.svg')}}" alt="">
              </button>
            </form>
          </div>
      </div>
    </div>
  </div>
@endif
