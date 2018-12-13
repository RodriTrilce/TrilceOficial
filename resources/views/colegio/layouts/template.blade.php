<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <title>@hasSection('title')@yield('title') - @endif Colegio Trilce</title>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ mix('/css/main.css') }}?v2">
  <link rel="stylesheet" href="{{ mix('/css/main_colegio.css') }}?v2">
  @include('tracking.in_head')
</head>
<body>
  @include('tracking.init_body')

  <div class="modal">
    <div class="modal-inner">
      <span data-modal-close>&times;</span>
      <div class="modal-content"></div>
    </div>
  </div>

  @yield('afterBody')
  @include('colegio.layouts.parts.header')
  @yield('content')
  @include('colegio.layouts.parts.footer')

<script>
  var page;
  @section('scripts')
</script>
<script src="{{ mix('/js/app_colegio.js') }}" charset="utf-8"></script>
@show
</body>
</html>
