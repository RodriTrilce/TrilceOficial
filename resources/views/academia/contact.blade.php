{{! $breadcrumbs = Breadcrumbs::render('academia-contact') }}
@extends('academia.layouts.template')
@section('title', 'Contáctenos')
@section('content')

<div class="header-double-top">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6"></div>
    <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-1"></div>
    <div class="header-double-border"></div>
    <div class="header-double-title">
      <h1>Contáctanos</h1>
    </div>
  </div>
</div>

@if($_POST)
  @if($status)
  <div class="col-xs-12 center-xs contact-status contact-finish">
    <h2>Gracias <strong>{{$name}}</strong>, nos pondremos en contacto con usted en la brevedad</h2>
  </div>
  @else
  <div class="col-xs-12 center-xs contact-status contact-error">
    <h2>Sucedio un error, intente más tarde.</h2>
  </div>
  @endif
@endif

  <div class="row center-xs center-sm container-base contact">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <div class="col-xs-12 col-sm contact-info">
        <h2>Información de contacto</h2>
        <p class="contant-info-subtitle">Para cualquier consulta comuníquese con nosotros:</p>
        <ul class="contant-info-ul">
          <li>Central Telefónica: 619-8100</li>
          <li>Correo: atencionalcliente@trilce.edu.pe</li>
          <li>Ubíquenos: En nuestras <a href="#" id="getSedes">Sedes</a></li>
        </ul>

        <br />
        <div class="worktrilce">
          <a href="#">

            <div class="row col-xs-12 worktrilce-div">
              <div class="col-xs worktrilce-line"><i class="fa fa-briefcase"></i></div>
              <div class="col-xs">TRABAJA<span class="about">con nosotros</span><span class="postulate">Postúla</span></div>
            </div>

          </a>
        </div>

      </div>
      <div class="col-xs-12 col-sm-6 contact-form">

        <div class="col-xs-12 step1">
          <h2>Déjanos tu consulta</h2>

          <form action="/colegio/contacto" method="post">
            @csrf
            <fieldset class="form-group">
              <input type="onlytext" name="contact_names" placeholder="Nombres y Apellidos" pattern="[A-Za-z ]+" required>
            </fieldset>

            <fieldset class="form-group">
              <input type="email" name="contact_email" placeholder="E-mail" required>
            </fieldset>

            <fieldset class="form-group">
              <input type="tel" type="tel" class="contant-form-phone" minlength="6" min="0" name="contact_phone" placeholder="Télefono" pattern="([0-9]+)" required>
            </fieldset>

            <fieldset class="form-group">
              <textarea name="contact_message" rows="8" cols="80" placeholder="Consulta" required></textarea>
            </fieldset>

            <div class="row col-xs-12">
              <div class="col-xs-12">
                <fieldset class="form-group">
                  <input type="captcha" class="captcha" name="captcha" id="captcha">
                </fieldset>
              </div>

              <div class="col-xs-12">
                <div class="g-recaptcha" data-callback="captcha" data-sitekey="6LeHW1cUAAAAALgptl-KjhXhIlK5JzCBI4Mt0Zi1"></div>
              </div>
            </div>
            <br>
            <input type="text" name="contact_type" value="academia" hidden readonly>
            <button type="submit" name="contact_validate" id="contact_validate" class="validate">Enviar <i class="fa fa-check"></i></button>
          </form>
        </div>

      </div>

    </div>
  </div>

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'contact';

    function captcha(){
      if(grecaptcha.getResponse().length > 0){
        document.getElementById("captcha").value = 'valid';
      }
    }
  @parent
  <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
