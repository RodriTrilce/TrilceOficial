{{! $breadcrumbs = Breadcrumbs::render('colegio-blogpost', $post->title) }}
@extends('colegio.layouts.template')
@section('title', $post->title)
@section('content')



  <div class="blog-post container-padding-mobile">
    <div class="blog-date">
      <div class="date-number">27</div>
      <div class="date-text">Abr</div>
    </div>

    <h1 class="blog-post-title">{{$post->title}}</h1>

    <hr class="grayhr2" />

    <div class="row col-xs-12">
      <div class="row col-xs-12 between-xs">
        <div class="col-xs-3">
          <div class="fb-like" data-href="http://www.trilce.edu.pe/{{$post->site}}/blog/{{$post->slug}}" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="false" data-colorscheme="dark"></div>
        </div>
        <div class="col-xs end-xs">
          <span class="blog-view"><i class="fa fa-eye"></i> {{$post->visits()->count()}}</span><span class="blog-date-line"><i class="fa fa-calendar"></i> {{$post->blogDate()}}</span>
        </div>
      </div>
    </div>

  </div>

  <div class="blog-blur">
    {{-- <div class="background-image"></div> --}}
    <div class="container-blog-banners">
    <div id="blog-banners" class="">
      @foreach ($post->blogGallery->images as $image)
        <div><img src="{{$image->blogImage()}}" alt=""></div>
      @endforeach
    </div>
  </div>
  </div>

  <div class="container-padding-mobile blog-post blog-post-content">
    {!! $post->content !!}

    <div class="row col-xs-12 end-xs blog-share-button">Te invitamos a compartir esta noticia
      <div class="fb-share-button" data-href="http://www.trilce.edu.pe/{{$post->site}}/blog/{{$post->slug}}" data-layout="button" data-size="small" data-mobile-iframe="true"></div>
    </div>
  </div>

  <hr class="grayhr2" />

  <div class="container-base row col-xs-12 center-xs pre-blog-posts-related">
    <div class="row col-xs-12 col-sm-10 col-md-9 start-xs start-sm blog-posts-related">

      <div class="col-xs-12">
        <h4 class="interest-title">Te puede interesar</h4>
      </div>
      @foreach ($related as $post)
        <div class="related-item">
          <a href="/{{$post->site}}/blog/{{$post->slug}}">
            <div class="item-image">
              <img src="{{ url( $post->blogFile->blogImage(true) ) }}" alt="{{$post->title}}">
            </div>
            <div class="item-title">
              <h3>{{$post->title}}</h3>
              <div class="item-view">
                <i class="fa fa-eye"></i> <span class="blog-view">{{$post->visits()->count()}}</span>
              </div>
            </div>
          </a>
        </div>
      @endforeach


    </div>
  </div>


  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'blog_post';
  @parent
@endsection
