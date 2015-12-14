<!doctype html>
<html>
<head>
  <title>
    {{-- Yield the title if it exists, otherwise default to 'dmorg.photos' --}}
    @yield('title','dmorg.photos')
  </title>

  <meta charset='utf-8'>
  <!-- for responsive design -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>
  <link href="http://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css' rel='stylesheet'>
  <!-- add this after the bootstrap if you don't want it overwritten:
  that's a couple of hours I'll never get back ;) -->
  <link href="/css/photos.css" type='text/css' rel='stylesheet'>

  {{-- Yield any page specific CSS files or anything else you might want in the head tags --}}
  @yield('head')

</head>

<body>

  @if(\Session::has('flash_message'))
    <div class='flash_message'>
      {{ \Session::get('flash_message') }}
    </div>
  @endif

  <div class="container">

    <header>
      <div class="col-lg-12 bigger bold">
        @yield('header')
      </div>
    </header>

    <!-- row 2 responsive navbar -->
    @include('partials.nav')

    <section class='row'>
      <div class="col-lg-8 col-md-8 col-lg-push-2 col-md-push-2">
        {{-- Main page content will be yielded here --}} @yield('content')
      </div>
    </section>

    <footer>
      <div class="col-lg-10 col-md-10 col-lg-push-1 col-md-push-1">
        &copy; {{ date('Y') }}
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        dave at dmorg dot org
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <a href='https://github.com/dmorgorg/photos' class='fa fa-github' target='_blank'> <span class='git'> Git the code</span></a>


      </div>
    </footer>

  </div>
  <!-- end class="container" -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
  @yield('body')

</body>
</html>
