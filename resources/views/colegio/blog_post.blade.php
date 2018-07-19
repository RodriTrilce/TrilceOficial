{{! $breadcrumbs = Breadcrumbs::render('colegio-blogpost', $post->title) }}
@extends('colegio.layouts.template')
@section('title', $post->title)
@section('content')



  <div class="blog-post container-padding-mobile">
    <h1 class="blog-post-title">{{$post->title}}</h1>
    <hr class="grayhr2" />

    <div class="row col-xs-12">
      <div class="row col-xs-12 between-xs">
        <div class="col-xs">
          <div class="fb-like" data-href="http://www.trilce.edu.pe/{{$post->slug}}" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="false" data-colorscheme="dark"></div>
        </div>
        <div class="col-xs end-xs">
          <i class="fa fa-eye"></i> <span class="blog-view">{{$post->view}}</span>
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
  </div>


  <hr class="grayhr2" />
  related

  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'blog_post';
  @parent
@endsection
