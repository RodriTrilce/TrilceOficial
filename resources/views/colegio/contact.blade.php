{{! $breadcrumbs = Breadcrumbs::render('colegio-contact') }}
@extends('colegio.layouts.template')
@section('title', 'Contáctenos')
@section('content')
  
  <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-contactenos.jpg') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-contactenos-movil.jpg') }}" alt="">
    </div>
  </div>

@if($_POST)
  @if($status)
  <div class="col-xs-12 center-xs contact-status contact-finish">
    <h2>Gracias <strong>{{$data->name}}</strong>, nos pondremos en contacto con usted en la brevedad</h2>
  </div>
  @else
  <div class="col-xs-12 center-xs contact-status contact-error">
    <h2>Sucedio un error, intente más tarde.</h2>
  </div>
  @endif
@endif

  <div class="row center-xs center-sm contact">
    <div class="row col-xs-11 col-sm-9 text-init">
      
      <div class="col-xs-12 col-sm contact-info">
        <h1>INFORMACIÓN DE CONTACTO</h1>
        <p>Para cualquier consulta comuníquese con nosotros:</p>
        <ul>
          <li>Central Telefónica: 619-8100</li>
          <li>Correo: atencionalcliente@trilce.edu.pe</li>
          <li>Ubíquenos: En nuestras <a href="#" id="getSedes">Sedes</a></li>
        </ul>
        
        <br />
        <div class="workTrilce">
          <h1>TRABAJA CON NOSOTROS</h1>
          <a href="#">Postula <i class="fa fa-pencil"></i></a>
        </div>

      </div>
      <div class="col-xs-12 col-sm-6 contact-form">
        
        <div class="col-xs-12 step1">
          <h2>Déjanos tu consulta</h2>
          
          <form action="/colegio/contacto" method="post">
            {{ csrf_field() }}
            <fieldset>
              <input type="text" name="contact_names" placeholder="Nombres y Apellidos" pattern="[A-Za-z ]+" required>
            </fieldset>

            <fieldset>
              <input type="mumber" name="contact_phone" placeholder="Télefono" pattern="([0-9]+)" required>
            </fieldset>
            
            <fieldset>
              <input type="text" name="contact_email" class="email" placeholder="E-mail"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            </fieldset>
            
            <fieldset>
              <textarea name="contact_message" rows="8" cols="80" placeholder="Consulta" required></textarea>
            </fieldset>

            <button type="submit" name="contact_validate" id="contact_validate" class="validate">Enviar <i class="fa fa-check"></i></button>
          </form>
        </div>
         
      </div>
      
    </div>
  </div>



  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'contact';
  @parent
@endsection