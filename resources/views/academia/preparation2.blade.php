{{--{{! $breadcrumbs = Breadcrumbs::render('academia-preparation', $title) }}
@extends('academia.layouts.template')
@section('title', 'Preparación ' . $title)
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6 header-double-bottom">
      </div>
      <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-preparation-{{$type}}"></div>

      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>
          @if($type == 'uni')
            Preparación UNI
          @elseif($type == 'san-marcos')
            Preparación San Marcos
          @elseif($type == 'pucp')
            Preparación Católica
          @endif
        </h1>
      </div>
    </div>
  </div>

  @switch($type)
    @case('san-marcos')
      @include('academia.partials.preparation.san-marcos')
      @break

    @case('uni')
--}}


      <?php 
      print_r($data);
      //$keywords = explode('{',$data);
      //print_r($keywords);
      ?>
    {{--@break

    @case('pucp')
      @include('academia.partials.preparation.pucp')
      @break
  @endswitch

@include('academia.partials.card_bottom')
@endsection
@section('scripts')
  page = 'preparation';
  var type = '{{$type}}'
@parent
@endsection--}}