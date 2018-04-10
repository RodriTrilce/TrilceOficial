@extends('academia.layouts.template')

@section('title', 'Olimpiadas Matemáticas')

@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-1"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Olimpiada matemática</h1>
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
  
  <div class="row center-xs center-sm math-olympic-onam">
    <div class="col-xs-12 title"><h2>ONAM</h2></div>
    <div class="row col-xs-12 col-sm-8 between-xs between-sm data">
      <div class="col-xs">27 de noviembre</div>
      <div class="col-xs">XXVII OLIMPIADA NACIONAL DE MATEMATICA - ONAM TRILCE</div>
      <div class="col-xs">2.° prim a 5.° sec.</div>
    </div>
    
    <div class="row col-xs-12 col-sm-9 text-init center-onam">
      <div class="row col-xs-12 col-sm-3 middle-sm middle-xs center-sm center-xs basics">
        <i class="fa fa-search"></i> Bases
      </div>
      <div class="row col-xs-12 col-sm block-onam">
        <div class="row col-xs-12 between-xs">
          <div class="col-xs inscription">INSCRIPCIONES TRILCE</div>
          <div class="col-xs"><a href="#"><i class="fa fa-user"></i> Individual</a></div>
          <div class="col-xs"><a href="#"><i class="fa fa-users"></i> Grupal</a></div>
          <div class="col-xs"><a href="#"><i class="fa fa-bullhorn"></i> Resultados</a></div>
        </div>
        <div class="row col-xs-12 between-xs">
          <div class="col-xs inscription">INSCRIPCIONES EXTERNAS</div>
          <div class="col-xs"><a href="#"><i class="fa fa-user"></i> Individual</a></div>
          <div class="col-xs"><a href="#"><i class="fa fa-users"></i> Grupal</a></div>
          <div class="col-xs"><a href="#"><i class="fa fa-bullhorn"></i> Resultados</a></div>
        </div>
      </div>
    </div>
    
    <div class="row col-xs-12 col-sm-9 text-init sponsor">
      
      <div class="row col-xs-12 col-sm-6 middle-sm information">
        <div class="col-xs-12 col-sm-12 center-xs">
          <p>
            <span>Informes e inscripciones</span> <br/>
            Av. Arequipa 1250, Santa Beatriz ° olimpiadas@trilce.edu.pe
          </p>
        </div>
      </div>
      
      <div class="row col-xs-12 col-sm-6">
        <div class="row col-sm col-xs-12 middle-sm middle-xs center-xs title"><div class="col-xs-12">Auspiciadores</div></div>
        <div class="col-sm col-xs-4"><img src="{{{ asset('static/images/academia/logo-artesco.jpg') }}}" alt="Aresto"></div>
        <div class="col-sm col-xs-4"><img src="{{{ asset('static/images/academia/logo-chocolisto.jpg') }}}" alt="Chocolisto"></div>
        <div class="col-sm col-xs-4"><img src="{{{ asset('static/images/academia/logo-fru.jpg') }}}" alt="Fru+"></div>
      </div>
    </div>
  </div>
  

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
  @parent
@endsection