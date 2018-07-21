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
<body class="my-login-page">

  <div id="breakpoints">
    <div class="xs d-block d-sm-none">xs</div>
    <div class="sm d-none d-sm-block d-md-none">sm</div>
    <div class="md d-none d-md-block d-lg-none">md</div>
    <div class="lg d-none d-lg-block d-xl-none">lg</div>
    <div class="xl d-none d-xl-block">xl</div>
  </div>

  <section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">&nbsp;</div>
					<div class="card fat">
						<div class="card-body">
              <div class="mb-4 text-center">
                <img src="{{ env('APP_MAIN_URL') }}/images/logo.png" height="90" alt="{{ env('APP_NAME') }}">
              </div>
							<form id="formLogin" action="{{ route('login') }}" method="post">
                @csrf

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="{{ route('password.request') }}" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required data-eye>

                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
								</div>

								<div class="form-group">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
								<div class="margin-top20 text-center">
									Don't have an account? <a href="{{ route('register') }}">Create One</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2018 &mdash; {{ env('APP_NAME') }}.
					</div>
				</div>
			</div>
		</div>
	</section>


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>

</body>
</html>
