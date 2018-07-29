@prepend('head_scripts')
  <link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" crossorigin="anonymous" />
@endprepend

@prepend('footer_scripts')
  <script src="{{ asset('js/app.js') }}" crossorigin="anonymous" async></script>
@endprepend

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="@yield('meta_description', 'Description…')" />
  <meta name="keywords" content="@yield('meta_keywords', 'keywords')" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>@yield('meta_title', env('APP_NAME') . ' Affiliate')</title>

  @stack('head_scripts')
</head>
<body>

  @include('partials.header')

  @yield('content')

  @include('partials.footer')

  @stack('footer_scripts')

</body>
</html>
