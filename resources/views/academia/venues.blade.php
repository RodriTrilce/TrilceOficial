{{! $breadcrumbs = Breadcrumbs::render('academia-venues') }}
@extends('academia.layouts.template')
@section('title', 'Sedes')
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
      <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-venues"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Nuestras sedes</h1>
      </div>
    </div>
  </div>

  <div class="row col-xs-12 center-xs venue">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-md">

      <div class="col-xs-12 col-sm container-base venue-info-container">
        <div class="row col-xs-12 col-sm-12 table-responsive">
          <table>
            <tbody>
                <tr>
        					<td data-label="Sede"><a href="/academia/sede/los-olivos">Los Olivos</a></td>
        					<td data-label="Sede"><a href="/academia/sede/santa-beatriz">Santa Beatriz</a></td>
        					<td data-label="Sede"><a href="/academia/sede/comas">Comas</a></td>
        					<td data-label="Sede"><a href="/academia/sede/villa-el-salvador">Villa El Salvador</a></td>
        					<td data-label="Sede"><a href="/academia/sede/cercado-de-lima">Cercado de Lima</a></td>
        					<td data-label="Sede"><a href="/academia/sede/marsano">Marsano</a></td>
        					<td data-label="Sede"><a href="/academia/sede/san-isidro">San Isidro</a></td>
                </tr>
            </tbody>
          </table>

        </div>
      </div>

    </div>
  </div>


  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'venues';

  @parent
@endsection
