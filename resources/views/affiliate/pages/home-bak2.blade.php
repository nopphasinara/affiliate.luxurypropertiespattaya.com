<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ env('APP_NAME') }} Affiliates</title>
  <link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet" crossorigin="anonymous">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

  <div id="breakpoints">
    <div class="xs d-block d-sm-none">xs</div>
    <div class="sm d-none d-sm-block d-md-none">sm</div>
    <div class="md d-none d-md-block d-lg-none">md</div>
    <div class="lg d-none d-lg-block d-xl-none">lg</div>
    <div class="xl d-none d-xl-block">xl</div>
  </div>


  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Left</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="//codeply.com">Codeply</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>
    <div class="mx-auto order-0">
      <a class="navbar-brand mx-auto" href="#">Navbar 2</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Right</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="container">
    <h1>Bootstrap 4 Card Centering Recipes</h1>
    <h5>Align individual columns vertically</h5>
    <code>.row (align-items-stretch=default)</code>
    <div class="row">
      <div class="col">
        <div class="card card-block">
          <h3>Card</h3>
        </div>
      </div>
      <div class="col">
        <div class="card card-block">
          <h3>Card</h3>
          <p>Some content here, and there and more here.</p>
        </div>
      </div>
      <div class="col align-self-end">
        <div class="card card-outline-danger card-block">
          <h3>Card</h3>
          <code>.col.align-self-end</code>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col align-self-center">
        <div class="card card-outline-danger card-block">
          <h3>Card</h3>
          <code>.col.align-self-center</code>
        </div>
      </div>
      <div class="col">
        <div class="card card-block">
          <h3>Card</h3>
          <p>Some content here, and there and more here.</p>
        </div>
      </div>
      <div class="col">
        <div class="card card-block">
          <h3>Card</h3>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col">
        <div class="card card-block h-100 align-items-center">
          <h3>Card</h3>
          <code>.card.h-100.align-items-center</code>
        </div>
      </div>
      <div class="col">
        <div class="card card-block h-100">
          <h3>Card</h3>
          <p>Some content here, and there and more here.</p>
          <code>.card.h-100</code>
        </div>
      </div>
      <div class="col">
        <div class="card card-block h-100">
          <h3>Card</h3>
          <code>.card.h-100</code>
        </div>
      </div>
    </div>
    <hr>
    <h5>Align entire row columns vertically</h5>
    <code>.row.align-items-center</code>
    <div class="row align-items-center">
      <div class="col">
        <div class="card card-block">
          <h3>Card</h3>
        </div>
      </div>
      <div class="col">
        <div class="card card-block">
          <h3>Card</h3>
          <p>Some content here, and there and more here.</p>
        </div>
      </div>
      <div class="col">
        <div class="card card-block">
          <h3>Card</h3>
          <p>Some content.</p>
        </div>
      </div>
    </div>
    <hr>
    <code>.row.align-items-end</code>
    <div class="row d-flex align-items-end">
      <div class="col">
        <div class="card card-block">
          <h3>Card</h3>
          <p>Some content here</p>
        </div>
      </div>
      <div class="col">
        <div class="card card-block">
          <h3>Card</h3>
          <p>Some content here, and there and more here and then some more.</p>
        </div>
      </div>
      <div class="col">
        <div class="card card-block">
          <h3>Card</h3>
        </div>
      </div>
    </div>
    <hr>
    <code>.row with centered content in equal height cards </code>
    <div class="row">
      <div class="col">
        <div class="card card-block h-100 justify-content-center">
          <h3>Card</h3>
          <p>Some content here</p>
          <code>.card.h-10.justify-content-center</code>
        </div>
      </div>
      <div class="col">
        <div class="card card-block h-100 justify-content-center">
          <h3>Card</h3>
          <p>Some content here, and there and more here and then some more.</p>
          <code>.card.h-10.justify-content-center</code>
        </div>
      </div>
      <div class="col">
        <div class="card card-block h-100 justify-content-center">
          <h3>Card</h3>
          <code>.card.h-10.justify-content-center</code>
        </div>
      </div>
    </div>

    <br><br>

    <h5>Align card content</h5>
    <div class="row">
      <div class="col">
        <div class="card h-100 card-block justify-content-center">
          <code>.h-100.justify-content-center</code>
          <h3>Card</h3>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 card-block justify-content-center align-items-center">
          <code>.h-100.justify-content-center<br>.align-items-center</code>
          <h3>Card</h3>
          Some content here, and there.
        </div>
      </div>
      <div class="col">
        <div class="card h-100 card-block justify-content-end">
          <code>.h-100.justify-content-end</code>
          <h3>Card</h3>
          Some content.
        </div>
      </div>
    </div>
    <hr>
  </div>


  <div class="container">
    <code>vertical center content of full height cards (solved)</code>
    <div class="row bg-faded">
      <div class="col-md-2">
        <div class="card card-body h-100 justify-content-center">
          I have a lot of content that wraps on multiple lines..
        </div>
      </div>
      <div class="col-md-6">
        <div class="card card-body h-100 justify-content-center">
          I have a line of content.<br>
          And another line here..
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-body h-100 justify-content-center">
          I have a little bit.
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-6 align-self-center">
        <div class="card card-body">Center</div>
      </div>
      <div class="col-6">
        <div class="card text-white bg-danger">
          <div class="card-body">
            <h3 class="card-title">Taller</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn text-white border-light">Outline</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-6">
        <div class="card card-body">Center</div>
      </div>
      <div class="col-6">
        <div class="card text-white bg-danger">
          <div class="card-body">
            <h3 class="card-title">Taller</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn text-white border-light">Outline</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-4">
        <div class="card card-body">Center</div>
      </div>
      <div class="col-4">
        <div class="card text-white bg-danger">
          <div class="card-body">
            <h3 class="card-title">Taller</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn text-white border-light">Outline</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card card-body">Center</div>
      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="card card-body">Top (default)</div>
      </div>
      <div class="col-4">
        <div class="card text-white bg-danger">
          <div class="card-body">
            <h3 class="card-title">Taller</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn text-white border-light">Outline</a>
          </div>
        </div>
      </div>
      <div class="col-4 align-self-center">
        <div class="card card-body">Center</div>
      </div>
    </div>
  </div>
  <div class="note">
    Vertical align grid columns of varying height.
  </div>



  <div class="container">
    <h3>Vertical align using d-inline-* &amp; align-*</h3>
    <!--parent must be full height-->
    <div class="row">
      <div class="col-sm-12">
        <div class="card card-body d-inline-block">I am a taller</div>
        <div class="p-0 card card-body d-inline-block align-top">align-top</div>
        <div class="p-0 card card-body d-inline-block align-bottom">align-bottom</div>
        <div class="p-0 card card-body d-inline-block align-middle">align-middle</div>
      </div>
    </div>
    <hr>
    <h3>Vertical center using d-table, d-table-cell &amp; align-middle</h3>
    <!--parent must be full height-->
    <div class="row h-50">
      <div class="col-sm-12 h-100 d-table">
        <div class="card card-body d-table-cell align-middle">
          I am centered
        </div>
      </div>
    </div>
  </div>
  <div class="note">
    Bootstrap 4 Vertical align using display utilities
  </div>


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <script src="{{ asset('js/app.js') }}" crossorigin="anonymous" async></script>

</body>
</html>
