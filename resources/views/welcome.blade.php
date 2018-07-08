<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Pricing example for Bootstrap</title>
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

  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">{{ env('APP_NAME') }}</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="{{ url('/') }}">Dashboard</a>
      <a class="p-2 text-dark" href="{{ url('/links') }}">Your Affiliate Links</a>
      <a class="p-2 text-dark" href="{{ url('/banners') }}">Banners</a>
      <a class="p-2 text-dark" href="{{ url('/tops-and-tricks') }}">Tips &amp; Tricks</a>
    </nav>
    @if (Route::has('login'))
      <div class="top-right links">
        @auth
          <a class="btn btn-outline-primary" href="{{ route('home') }}">{{ auth()->user()->email }}</a>
          <a class="btn-logout btn btn-outline-primary" data-form="formLogout" href="{{ route('logout') }}">{{ __('Logout') }}</a>
          <form class="d-none" id="formLogout" action="{{ route('logout') }}" method="post">@csrf</form>
        @else
          <a class="btn btn-outline-primary" href="{{ route('login') }}">Login</a>
          <a class="btn btn-outline-primary" href="{{ route('register') }}">Register</a>
        @endauth
      </div>
    @endif

  </div>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">{{ env('APP_NAME') }} Affiliates</h1>
    <p class="lead">Welcome Aboard! Every new day is another chance to change your life. <a href="#">Learn how to get started</a> of {{ env('APP_NAME') }} Affiliates.</p>
  </div>

  <div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Eligibility For Next Payout</h4>
        </div>
        <div class="card-body">
          <h3 class="card-title pricing-card-title">$0</h3>
          <ul class="list-unstyled mt-3 mb-4">
            <li><span class="text-primary"><i class="fas fa-info"></i> Only commissions approved by manager are eligible for a payout</span></li>
            <li>You have earned $0.00 of the minimum $75.00 requirement.</li>
          </ul>
        </div>
      </div>
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Your Affiliate Link</h4>
        </div>
        <div class="card-body">
          <h3 class="card-title pricing-card-title">https://luxurypropertiespattaya.com/?aid=<span class="text-muted">{{ auth()->user()->id }}</span></h3>
          <ul class="list-unstyled mt-3 mb-4">
            <li><p class="lead mb-0">Everything starts with your personal link. Promote it freely!</p></li>
            <li>Copy & Share your unique link with your friends or website visitors</li>
          </ul>
        </div>
      </div>
    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          &copy Copyright 2018 {{ env('APP_NAME') }}. All Rights Reserved.
        </div>
      </div>
    </footer>
  </div>


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>

  {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
  {{-- <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> --}}
  {{-- <script src="../../../../assets/js/vendor/popper.min.js"></script> --}}
  {{-- <script src="../../../../dist/js/bootstrap.min.js"></script> --}}
  {{-- <script src="../../../../assets/js/vendor/holder.min.js"></script> --}}
  {{-- <script>
  Holder.addTheme('thumb', {
    bg: '#55595c',
    fg: '#eceeef',
    text: 'Thumbnail'
  });
  </script> --}}
</body>
</html>
