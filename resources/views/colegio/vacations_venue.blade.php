{{! $breadcrumbs = Breadcrumbs::render('colegio-vacations-venue', $data->name, $data->slug) }}
@extends('colegio.layouts.template')
@section('title', $data->name)
@section('content')

  <div class="header-vacations">
    <div class="row col-xs-12 end-sm start-xs">
      <div class="row col-sm-11 col-xs-12">
        <div class="row col-sm-4 col-xs-12 center-xs middle-xs">

          <div class="vacations__logo">
            <div class="vacations__container-logo center-xs">
              <img src="{{asset('static/images/colegio/vacations/logo.png')}}" alt="Vacaciones Útiles">
            </div>
            @include('colegio.partials.vacations.selects')
          </div>

        </div>
        <div class="col-sm start-xs xs-hide">
          <div class="vacations__slider" id="vacations_slider">

            <div>
              <img src="{{asset('static/images/colegio/vacations/slider_1.png')}}" alt="Vacaciones Útiles">
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row col-xs-12 center-xs container-base vacations__home-container">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <div class="col-xs-12 center-xs">
        <h1 class="vacations__title">Sede {{$data->name}}</h1>
      </div>

      <div class="row col-xs-12">
        @include('colegio.partials.vacations.venues.' . $data->slug)
      </div>

      <div class="col-xs-12 vacations__bottom vacations__bottom--white">
        <div class="table-responsive" style="width:100%;">
            <table class="venue-table">
              <thead>
                <tr>
                  <th>Nivel</th>
                  <th>Dirección</th>
                  <th>Teléfono</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($address as $k)
                  @if($k->vacations)
                    <tr>
                      <td data-label="Nivel">{!! $k->grades !!}</td>
                      <td data-label="Dirección">{{ $k->address }}</td>
                      <td data-label="Teléfono">{{ $k->phone }}</td>
                    </tr>
                  @endif
                @endforeach
              </tbody>
            </table>
        </div>
      </div>

    </div>
  </div>

  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'vacations_venue';
  @parent
@endsection
