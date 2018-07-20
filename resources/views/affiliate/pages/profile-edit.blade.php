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

  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-light border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">{{ env('APP_NAME') }}</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-light" href="{{ url('/') }}">Dashboard</a>
      {{-- <a class="p-2 text-light" href="{{ url('/links') }}">Your Affiliate Links</a> --}}
      {{-- <a class="p-2 text-light" href="{{ url('/banners') }}">Banners</a> --}}
      <a class="p-2 text-light" href="{{ url('/tops-and-tricks') }}">Tips &amp; Tricks</a>
    </nav>
    @if (Route::has('login'))
      <div class="top-right links">
        @auth
          <a class="btn btn-light" href="{{ url('/profile') }}"><i class="fas fa-fw fa-user"></i> {{ auth()->user()->email }}</a>
          <a class="btn-logout btn btn-secondary" data-form="formLogout" href="{{ route('logout') }}"><i class="fas fa-fw fa-sign-out-alt"></i> Logout</a>
          <form class="d-none" id="formLogout" action="{{ route('logout') }}" method="post">@csrf</form>
        @else
          <a class="btn btn-outline-primary" href="{{ route('login') }}">Login</a>
          <a class="btn btn-outline-primary" href="{{ route('register') }}">Register</a>
        @endauth
      </div>
    @endif

  </div>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4 mb-4">Update Your Profile Details</h1>
    <div class="container">
      <div class="row d-flex justify-content-center text-left">
        <div class="col-6">
          @if (session('success'))
            <div class="alert alert-success alert-dismissable fade show" role="alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <h4><i class="icon fa fa-check fa-fw" aria-hidden="true"></i> Success</h4>
              {{ session('success') }}
            </div>
          @endif

          @if ($errors->any())
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <h4><i class="icon fa fa-exclamation fa-fw" aria-hidden="true"></i> Error</h4>
              @forelse ($errors->all() as $key => $error)
                <div>{{ $error }}</div>
              @empty

              @endforelse
            </div>
          @endif
          <form method="post" action="{{ route('profile.update') }}">
            {{ csrf_field() }}
            {{ method_field('patch') }}

            <div class="form-group">
              <label for="inputName">Your Name</label>
              <input type="text" class="form-control" id="inputName" name="name" aria-describedby="nameHelp" value="{{ $user->name }}" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="inputEmail">Email Address</label>
              <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" value="{{ $user->email }}" placeholder="Enter your email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="inputPasswordConfirmation">Confirm Password</label>
              <input type="password" class="form-control" id="inputPasswordConfirmation" name="password_confirmation" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-lg btn-primary"><i class="fas fa-fw fa-save"></i> SAVE</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
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
