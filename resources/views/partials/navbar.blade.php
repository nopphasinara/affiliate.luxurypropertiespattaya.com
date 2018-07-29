<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-light border-bottom box-shadow">
  <h5 class="my-0 mr-md-auto font-weight-normal">{{ env('APP_NAME') }}</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-light" href="{{ url('/') }}">Dashboard</a>
    {{-- <a class="p-2 text-light" href="{{ url('/listings') }}">Manage Listings</a> --}}
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
