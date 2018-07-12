{{! $breadcrumbs = Breadcrumbs::render('academia-matholympics') }}
@extends('academia.layouts.template')
@section('title', 'Olimpiadas Matemáticas')
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6"></div>
      <div class="col-xs-12 col-sm-6 header-double-w-matholympics"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Olimpiadas de matemáticas</h1>
      </div>
    </div>
  </div>

  <div class="row center-xs center-sm math-olympic">
    <div class="col-xs-11 col-sm-11 col-md-10 col-lg-9 text-init math-olympic-table">
      @foreach ($data as $key => $v)
      <div class="row col-xs">

        <div class="col-xs-12 math-olympic-title">{{$v->venue}}</div>

        <div class="row col-xs-12 col-sm col-md-7 math-olympic-content">
          <div class="col-xs-2 "><span class="a">{{ Date::parse($v->created_at)->format('j \d\e F ') }}</span><span class="b">{{ date('j/n', strtotime($v->created_at)) }}</span></div>
          <div class="col-xs-7 col-sm-8">{{$v->title}}</div>
          <div class="col-xs">{{$v->grade}}</div>
        </div>

        <div class="row col-xs-12 col-sm col-md">
          <ul class="math-olympic-list">
            <li {!! ($v->file_id!==''?'class="active"':'') !!}><a href="{{$v->getBaseRules()}}" target="_blank">Bases</a></li>
            <li {!! ($v->inscription_url!==''?'class="active"':'') !!}><a href="{{$v->inscription_url}}" target="_blank">Inscripción individual</a></li>
            <li {!! ($v->inscription_group_url!==''?'class="active"':'') !!}><a href="{{$v->inscription_group_url}}" target="_blank">Inscripción grupal</a></li>
            <li><a href="" target="_blank">Resultados</a></li>
          </ul>
        </div>


      </div>
      @endforeach

    </div>
  </div>

  <div class="row center-xs center-sm math-olympic-onam">
    <div class="col-xs-12 title"><h2>ONAM TRILCE</h2></div>
    <div class="row col-xs-12 col-sm-8 between-xs between-sm data">
      <div class="col-xs">25 de noviembre</div>
      <div class="col-xs">XXX OLIMPIADA NACIONAL DE MATEMÁTICA</div>
      <div class="col-xs">2.° prim a 5.° sec.</div>
    </div>

    <div class="row col-xs-12 col-sm-9 text-init center-onam">
      <div class="row col-xs-12 col-sm-3 middle-sm middle-xs center-sm center-xs basics">
        <i class="fa fa-search"></i> Bases
      </div>
      <div class="row col-xs-12 col-sm block-onam">
        <div class="row col-xs-12 between-xs">
          <div class="col-xs inscription">INSCRIPCIONES</div>
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
            Av. Arequipa 1381, Santa Beatriz - olimpiadas@trilce.edu.pe
          </p>
        </div>
      </div>

      <div class="row col-xs-12 col-sm-6">
        <div class="row col-sm col-xs-12 middle-sm middle-xs center-xs title"><div class="col-xs-12">Auspiciadores</div></div>
        <div class="col-sm col-xs-4"><img src="{{{ asset('static/images/academia/logo-artesco.jpg') }}}" alt="Aresto"></div>
        <div class="col-sm col-xs-4"><img src="{{{ asset('static/images/academia/logo-dgnotas.jpg') }}}" alt="Gnotas"></div>
        <div class="col-sm col-xs-4"><img src="{{{ asset('static/images/academia/logo-fru.jpg') }}}" alt="Fru+"></div>
      </div>
    </div>
  </div>


  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'math_olympics';
  @parent
@endsection
