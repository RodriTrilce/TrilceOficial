@extends('academia.layouts.template')

@section('title', 'Acerca de Nosotros')

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


  
  <div class="row center-xs center-sm contact">
    <div class="row col-xs-11 col-sm-9 text-init">
      
      <div class="col-xs-12 col-sm contact-info">
        <h1>INFORMACIÓN DE CONTACTO</h1>
        <p>Para cualquier consulta comuníquese con nosotros:</p>
        <ul>
          <li>Central Telefónica: +511 619-8100</li>
          <li>Correo: atencionalcliente@trilce.edu.pe</li>
          <li>Ubíquenos: En nuestras <a href="#" id="getSedes">Sedes</a></li>
        </ul>
        
        <br />
        <div class="workTrilce">
          <h1>TRABAJA CON NOSOTROS</h1>
          <a href="#">Postúla <i class="fa fa-pencil"></i></a>
        </div>

      </div>
      <div class="col-xs-12 col-sm-6 contact-form">
        <div class="col-xs-12 step1">
          <h2>Déjanos tu consulta</h2>
          
          <form action="/academia/contacto/send" method="post">
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



  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
  <script>
    page = 'contact';
  </script>
  @parent
@endsection