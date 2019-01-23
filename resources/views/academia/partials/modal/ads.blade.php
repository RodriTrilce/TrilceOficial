  @if (!session('contact') && !session('enrollment') )
    <div id="modal-ads" style="display:none;">
        <div class="row top-xs col-xs-12 center-xs">
          <a href="/inscripcion-academia/" class="row top-xs col-xs-12 center-xs">
            <img class="xs-hide" src="/storage/static/images/other/pop-up/pop-up-academia.png?v2.1" alt="No te quedes sin vacante">
            <img class="xs-reverse" src="/storage/static/images/other/pop-up/pop-up-academia-movil.png?v2.1" alt="No te quedes sin vacante">
          </a>
        </div>
    </div>
  @endif
