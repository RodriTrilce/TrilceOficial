  @if (!session('contact') && !session('enrollment') )
      @if($popup)
        <div id="modal-ads" style="display:none;">
            <div class="row top-xs col-xs-12 center-xs">
              <a href="{{$popup{0}->link}}" target="_blank" class="row top-xs col-xs-12 center-xs">
                <img class="xs-hide" src="/storage/static/images/other/pop-up/{{$popup{0}->image_url}}">
                <img class="xs-reverse" src="/storage/static/images/other/pop-up/{{$popup{0}->image_url_movil}}">
              </a>
            </div>
        </div>
      @endif
  @endif