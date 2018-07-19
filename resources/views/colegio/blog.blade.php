{{! $breadcrumbs = Breadcrumbs::render('colegio-blog') }}
@extends('colegio.layouts.template')
@section('title', 'Blog')
@section('content')

  <div class="row col-xs-12 blog-home-top">
    <div class="col-xs-12 col-xs-12 col-md-6 blog-home-top-imge"><img src="{{ url('/static/images/colegio/blog/post-cover.png') }}" alt=""></div>

    <div class="row col-xs-12 col-xs-12 col-md blog-home-top-section">
      <div class="col-xs-12">
        <section class="blog-home-top-section--section">
          <h1 class="blog-home-top-title">Desayuno y firma de compromisos para las Olimpiadas de Matemática 2018</h1>
          <div class="blog-home-top-date">Abril 21, 2018 <i class="fa fa-calendar"></i></div>
          <div class="blog-home-top-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="row col-xs-12 between-xs blog-home-top-bottom">
            <div class="col-xs start-xs blog-home-top-bottom--more"><a href="#">Leer más <i class="fa fa-search"></i></a></div>
            <div class="col-xs end-xs blog-home-top--view"><i class="fa fa-eye"></i> 65</div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <div class="row col-xs-12 blog-home-aftertop">
    <div class="row col-xs-12 col-sm blog-home-aftertop--item">
      <div class="col-xs blog-home-aftertop--item-image"><img src="{{ url('/static/images/colegio/blog/img-small.png') }}" alt=""></div>
      <div class="row col-xs blog-home-aftertop--item-title"><a href="#">¡Felicidades cachimbos San Marcos 2018-II!</a></div>
    </div>
    <div class="row col-xs-12 col-sm blog-home-aftertop--item">
      <div class="col-xs blog-home-aftertop--item-image"><img src="{{ url('/static/images/colegio/blog/img-small.png') }}" alt=""></div>
      <div class="row col-xs blog-home-aftertop--item-title"><a href="#">¡Felicidades cachimbos San Marcos 2018-II!</a></div>
    </div>
    <div class="row col-xs-12 col-sm blog-home-aftertop--item">
      <div class="col-xs blog-home-aftertop--item-image"><img src="{{ url('/static/images/colegio/blog/img-small.png') }}" alt=""></div>
      <div class="row col-xs blog-home-aftertop--item-title"><a href="#">¡Felicidades cachimbos San Marcos 2018-II!</a></div>
    </div>
  </div>


  <div class="row col-xs-12 center-xs blog-home-grid">
    <div class="row col-xs-12 col-sm-10 col-md-9 start-sm">

      @foreach ($posts as $post)
        <div class="row col-xs-12 col-sm-6 blog-home-grid--item">
          <div class="col-xs-4 col-sm-6 blog-home-grid--item-image">
            <a href="/{{$post->site}}/blog/{{$post->slug}}"><img src="{{ url( $post->blogFile->blogImage(true) ) }}" alt=""></a>
          </div>

          <div class="row col-xs blog-home-grid--item-content start-xs">

            <div class="col-xs-12 blog-home-grud-item-contentpre">
              <div class="blog-home-grid--item-title">
                <h3 class=""><a href="/{{$post->site}}/blog/{{$post->slug}}">{{ $post->title }}</a></h3>
              </div>
              <p class="blog-home-grid--item-date">{{ Date::parse($post->created_at)->format('j \d\e F, Y') }} <i class="fa fa-calendar"></i></p>
              <div class="blog-home-grid--item-text">
                {{ Str::words(strip_tags($post->content), 30, '...') }}
              </div>
              <div class="row col-xs-12 blog-home-grid--item-op between-sm start-xs">
                <div class="row col-xs xs-hide"><a href="/{{$post->site}}/blog/{{$post->slug}}">Leer más <i class="fa fa-search"></i></a></div>
                <div class="row col-xs-4 start-xs end-sm blog-home-grid--item-op-more"><i class="fa fa-eye"></i> <span>65</span></div>
              </div>
            </div>

          </div>
        </div>
      @endforeach


    </div>
  </div>

  <div class="row col-xs-12 center-xs pagination-container">
    {{-- {{ $posts->links() }} --}}
  </div>



  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'blog';
  @parent
@endsection
