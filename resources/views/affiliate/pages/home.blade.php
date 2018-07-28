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


  <div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
      <div class="carousel-inner row w-100 mx-auto" role="listbox">
        <div class="carousel-item col-md-3 active">
          <img class="img-fluid mx-auto d-block" data-src="holder.js/100px600vh?random=yes&auto=yes&text=1" alt="slide 1">
        </div>
        <div class="carousel-item col-md-3">
          <img class="img-fluid mx-auto d-block" data-src="holder.js/100px600vh?random=yes&auto=yes&text=2" alt="slide 2">
        </div>
        <div class="carousel-item col-md-3">
          <img class="img-fluid mx-auto d-block" data-src="holder.js/100px600vh?random=yes&auto=yes&text=3" alt="slide 3">
        </div>
        <div class="carousel-item col-md-3">
          <img class="img-fluid mx-auto d-block" data-src="holder.js/100px600vh?random=yes&auto=yes&text=4" alt="slide 4">
        </div>
        <div class="carousel-item col-md-3">
          <img class="img-fluid mx-auto d-block" data-src="holder.js/100px600vh?random=yes&auto=yes&text=5" alt="slide 5">
        </div>
        <div class="carousel-item col-md-3">
          <img class="img-fluid mx-auto d-block" data-src="holder.js/100px600vh?random=yes&auto=yes&text=6" alt="slide 6">
        </div>
        <div class="carousel-item col-md-3">
          <img class="img-fluid mx-auto d-block" data-src="holder.js/100px600vh?random=yes&auto=yes&text=7" alt="slide 7">
        </div>
        <div class="carousel-item col-md-3">
          <img class="img-fluid mx-auto d-block" data-src="holder.js/100px600vh?random=yes&auto=yes&text=8" alt="slide 7">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <i class="fa fa-chevron-left fa-lg text-muted"></i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
        <i class="fa fa-chevron-right fa-lg text-muted"></i>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>
  <script>
  $('#carouselExample').on('slide.bs.carousel', function (e) {

    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;

    if (idx >= totalItems-(itemsPerSlide-1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i=0; i<it; i++) {
        // append slides to end
        if (e.direction=="left") {
          $('.carousel-item').eq(i).appendTo('.carousel-inner');
        }
        else {
          $('.carousel-item').eq(0).appendTo('.carousel-inner');
        }
      }
    }
  });

  self.addEventListener('fetch', event => {
    //caching for offline viewing
    const {request} = event;
    const url = new URL(request.url);
    if(url.origin === location.origin) {
      event.respondWith(cacheData(request));
    } else {
      event.respondWith(networkFirst(request));
    }
  });

  async function cacheData(request) {
    const cachedResponse = await caches.match(request);
    return cachedResponse || fetch(request);
  }
  </script>

</body>
</html>
