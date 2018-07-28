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


  <div class="container pt-3">
    <div class="row">
      <div class="col-12 col-sm-10 mx-auto">
        <div class="row">
          <div class="col-lg-12">
            <h1>Bootstrap 4 Cards</h1>
            <p class="lead">Thanks to the new spacing utility classes there's a lot you can do.</p>
          </div>
          <div class="col-lg-6">

            <div class="card">
              <div class="col-12">
                <div class="row bg-primary text-center text-white">
                  <div class="col-4 bg-success py-5">
                    <h1><i class="fa fa-lg fa-tree"></i></h1>
                  </div>
                  <div class="col-4 bg-danger py-5">
                    <h1><i class="fa fa-lg fa-bullseye"></i></h1>
                  </div>
                  <div class="col-4 bg-primary py-5">
                    <h1><i class="fa fa-lg fa-flask"></i></h1>
                  </div>
                </div>
                <div class="card-body">
                  <h3>Card</h3>
                  <p>With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-outline-secondary">Outline</a>
                </div>
              </div>
            </div>

            <br>

            <div class="card">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 d-flex bg-success p-5">
                    <h1 class="mx-auto align-self-center"><i class="fa fa-2x fa-tree"></i></h1>
                  </div>
                  <div class="col-md-6 py-3">
                    <h3 class="card-title">Conifer</h3>
                    <p class="card-text">With supporting roots below as a natural lead-in to additional content and then some more content that is here.</p>
                    <a href="#" class="btn btn-outline-success btn-block">Outline</a>
                  </div>
                </div>

              </div>
            </div>

            <div class="row py-3">
              <div class="col-sm-6 py-3">
                <div class="card">
                  <div class="card-body text-center">
                    <h1 class="p-3 text-primary"><i class="fa fa-2x fa-flask"></i></h1>
                  </div>
                  <div class="card-footer text-center">45 Tests</div>
                </div>
              </div>
              <div class="col-sm-6 py-3">
                <div class="card">
                  <div class="card-body text-center">
                    <h1 class="p-3 text-danger"><i class="fa fa-2x fa-bullseye"></i></h1>
                  </div>
                  <div class="card-footer text-center">17 Targets</div>
                </div>
              </div>
              <div class="col-sm-6 py-3">
                <div class="card">
                  <div class="card-body text-center">
                    <h1 class="p-3 text-success"><i class="fa fa-2x fa-tree"></i></h1>
                  </div>
                  <div class="card-footer text-center">39 Views</div>
                </div>
              </div>
              <div class="col-sm-6 py-3">
                <div class="card">
                  <div class="card-body text-center">
                    <h1 class="p-3 text-warning"><i class="fa fa-2x fa-car"></i></h1>
                  </div>
                  <div class="card-footer text-center">4 Categories</div>
                </div>
              </div>
            </div>

            <div class="list-group py-2" id="card_list">
              <a href="#" class="list-group-item">
                Grapes
              </a>
              <a href="#" class="list-group-item">
                Milk
              </a>
              <a href="#" class="list-group-item">
                Apple Chips <i class="fa fa-heart-o float-right"></i>
              </a>
              <a href="#" class="list-group-item">
                Fried Dough
              </a>
              <a href="#" class="list-group-item">
                Salad
              </a>
              <div href="#" class="list-group-item">
                <button class="btn btn-primary btn-lg btn-block">Read More</button>
              </div>
            </div>

            <br>

            <div class="card border-danger mb-3">
              <div class="row no-gutters">
                <div class="col-6 p-3">
                  <h3>Heart</h3>
                  <p>With supporting nature as a natural lead-in to additional content and then some more content that is here.</p>
                </div>
                <div class="col bg-danger text-white d-flex">
                  <h1 class="mx-auto align-self-center">
                    <i class="fa fa-2x fa-heart-o"></i>
                  </h1>
                </div>
              </div>
            </div>


          </div>
          <div class="col-lg-6">

            <div class="card" id="card_sponsor">
              <div class="card-body">
                <div class="row p-3">
                  <div class="col-12">
                    <h3>Sponsor</h3>
                    <img src="//unsplash.it/400x200" class="img-fluid">
                    <hr>
                    <p class="">Shiny, shiny. Varius azdipiscing elit. Duis pharetra codeply varius quam sit amet vulputate. Ovi lipsim diro?</p>
                    <button class="btn btn-secondary">Take Action!</button>
                  </div>
                </div>
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-sm-6">
                <div class="card text-white bg-dark text-center pt-2 mb-4">
                  <div class="card-body card-title">
                    <h1 class="m-b-2"><i class="fa fa-facebook display-2"></i></h1>
                    <h6 class="text-light">56 Likes</h6>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card text-white bg-primary text-center pt-2 mb-4">
                  <div class="card-body card-title">
                    <h1 class="m-b-2"><i class="fa fa-twitter display-2"></i></h1>
                    <h6 class="text-light">209 Followers</h6>
                  </div>
                </div>
              </div>
              <div class="clearfix"> </div>
              <div class="col-sm-6">
                <div class="card text-white bg-success text-center py-2 mb-4">
                  <div class="card-body card-title">
                    <h1 class="m-b-2"><i class="fa fa-tree display-2"></i></h1>
                    <h6 class="text-light">20 Snaps</h6>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card text-white bg-danger text-center py-2 mb-4">
                  <div class="card-body card-title">
                    <h1 class="m-b-2"><i class="fa fa-youtube display-2"></i></h1>
                    <h6 class="text-light">1,110 Views</h6>
                  </div>
                </div>
              </div>
              <div class="clearfix"> </div>
              <div class="col-sm-6">
                <div class="card text-white bg-info text-center pt-2 mb-4">
                  <div class="card-body card-title">
                    <h1 class="m-b-2"><i class="fa fa-reddit display-2"></i></h1>
                    <h6 class="text-light">90 Views</h6>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card text-white bg-warning text-center pt-2 mb-4">
                  <div class="card-body card-title">
                    <h1 class="m-b-2"><i class="fa fa-chrome display-2"></i></h1>
                    <h6 class="text-light">44 Apps</h6>
                  </div>
                </div>
              </div>
            </div>
            <!--/row-->

            <div class="card my-3">
              <div class="container-fluid">
                <div class="row bg-info py-5">
                  <div class="col-3 mx-auto">
                    <img class="rounded-circle img-fluid" src="//api.randomuser.me/portraits/men/73.jpg" alt="person">
                  </div>
                  <div class="col-12 text-center">
                    <h3>Horton Beasley</h3>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-12 py-3">
                    <p>Horton started at ACME 4 years ago and, is a pooch pooch with clever lyrics. This is a card.</p>
                  </div>
                </div>
                <div class="row mb-2 justify-content-center">
                  <div class="col-sm text-center">
                    <i class="fa fa-star"></i>
                    <br> Saves
                    <h4>17</h4>
                  </div>
                  <div class="col-sm text-center">
                    <i class="fa fa-heart"></i>
                    <br> Likes
                    <h4>9</h4>
                  </div>
                  <div class="col-sm text-center">
                    <i class="fa fa-file-o"></i>
                    <br> Posts
                    <h4>45</h4>
                  </div>
                  <div class="col-sm text-center">
                    <i class="fa fa-user"></i>
                    <br> Friends
                    <h4>36</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!--/row-->
      </div><!--col-->
    </div><!--row-->
    <div class="row py-2">
      <div class="col-12 col-sm-10 mx-auto">
        <div class="card">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-lg-2 col-4 mx-auto text-nowrap text-center px-2">
                <a href="">
                  <img class="d-block mx-auto rounded-circle img-fluid" src="http://api.randomuser.me/portraits/women/73.jpg">
                </a>
              </div>
              <div class="col-lg-7 text-center text-lg-left">
                <h2 class="d-inline">Mary Chesnut</h2><span class="badge badge-pill badge-success sup small align-top">4</span>
                <h6>Some short bio</h6>
                <ul class="list-inline mt-3">
                  <li class="list-inline-item">
                    <button class="btn btn-secondary rounded-circle">
                      <i class="fa fa-bell-o align-middle"></i>
                    </button>
                  </li>
                  <li class="list-inline-item">
                    <button class="btn btn-secondary rounded-circle">
                      <i class="fa fa-clock-o align-middle"></i>
                    </button>
                  </li>
                  <li class="list-inline-item">
                    <button class="btn btn-secondary rounded-circle">
                      <i class="fa fa-envelope-o align-middle"></i>
                    </button>
                  </li>
                  <li class="list-inline-item">
                    <button class="btn btn-success rounded">Follow +</button>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-6 mx-auto">
                <div class="row no-gutters text-center justify-content-end align-items-end">
                  <div class="col">
                    <h2>123</h2>
                    <span class="badge badge-pill badge-dark font-weight-normal">posts</span>
                  </div>
                  <div class="col">
                    <h2>19</h2>
                    <span class="badge badge-pill badge-dark font-weight-normal">friends</span>
                  </div>
                  <div class="col">
                    <h2>45</h2>
                    <span class="badge badge-pill badge-dark font-weight-normal">badges</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <p class="mt-4 text-center">That's the end!</p>
  </div>


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <script src="{{ asset('js/app.js') }}" crossorigin="anonymous" async></script>

</body>
</html>
