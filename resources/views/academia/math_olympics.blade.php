@extends('academia.layouts.template')

@section('title', 'Olimpiadas Matemáticas')

@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-1"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Olimpiada matemática </h1>
      </div>
    </div>
  </div>
  
  <div class="row center-xs center-sm math-olympic">
    <div class="col-xs-11 col-sm-9 text-init math-olympic-table">
      
      @foreach ($data as $key => $v)
      <div class="row col-xs">
        <div class="col-xs-12 math-olympic-title">{{$v->sede}}</div>
        <div class="row col-xs-12 col-sm math-olympic-content">
          <div class="col-sm-1 col-xs-2">{{ date('d \d\e F', strtotime($v->created_at)) }}</div>
          <div class="col-xs">{{$v->title}}</div>
          <div class="col-xs-3">{{$v->grade}}</div>
        </div>
        
        <div class="row col-xs-12 col-sm">
          <ul class="math-olympic-list">
            <li class="active"><a href="{{$v->base_url}}" target="_blank">Bases</a></li>
            <li><a href="{{$v->inscription_url}}" target="_blank">Inscripción individial</a></li>
            <li><a href="{{$v->inscription_group_url}}" target="_blank">Inscripción grupal</a></li>
            <li><a href="{{$v->results_url}}" target="_blank">Resultados</a></li>
          </ul>
        </div>

      </div>
      @endforeach
      
    </div>
  </div>
  

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
  @parent
@endsection