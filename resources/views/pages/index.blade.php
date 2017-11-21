<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../theme/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../theme/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../theme/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../theme/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../theme/css/demo.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="/" data-placement="bottom">
                    EmerAct Review Platform
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./theme/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/news">
                            <p>Berita Global</p>
                        </a>
                    </li>
                    @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link">
                                <p>{{ Auth::user()->name }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <img style="width: 42px; height:42px; margin-left:10px;" class="rounded-circle" src="{{ Gravatar::get(Auth::user()->email)  }}">
                            {{-- <img style="width: 42px; height:42px; margin-left:10px;" class="rounded-circle" src="{{ if (!empty($user['avatara'])){ $user->avatar} }}"> --}}
                        </li>
                        <li class="nav-item" style="text-align:center;">
                            <a class="nav-link btn btn-neutral" href="/logout"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            <p>Keluar</p>
                            </a>
                            <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#loginModal">
                                <p>Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" data-toggle="modal"  data-target="#registerModal">
                                <p>Daftar</p>
                            </a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('./img/back-main.jpg') ;">
            </div>
            <div class="container">
                <div class="content-center brand">
                    <img class="emeract-logo" src="./img/logo.png" alt="">
                    <h2 class="h2">Review Platform Layanan Darurat<br>PemProv DKI Jakarta</h2>
                    <h5 class="category category-absolut">Polisi | Ambulance | Rumah Sakit | Pemadam Kebakaran</h5>
                </div>
            </div>
        </div>
        <div class="section section-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">Apa itu Emeract ?</h2>
                        <h5 class="description">EmerAct adalah sebuah platform berbasis social review sebagai sarana bagi masyarakat DKI Jakarta untuk menyampaikan laporan, testimoni dan keluhan terkait layanan darurat yang disediakan PemProv DKI Jakarta</h5>
                    </div>
                </div>
                <div class="separator separator-primary"></div>
                <div class="section-story-overview">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image-container image-left" style="background-image: url('../theme/img/login.jpg')">
                              <!-- First image on the left side -->
                                <p class="blockquote blockquote-primary">
                                    "Peduli dengan sekitar adalah ciri bangsa yang maju"
                                    <br>
                                    <br>
                                    <small>-tim EmerAct</small>
                                </p>
                            </div>
                          <!-- Second image on the left side of the article -->
                            <div class="image-container" style="background-image: url('../theme/img/bg3.jpg')"></div>
                        </div>
                        <div class="col-md-5">
                          <!-- First image on the right side, above the article -->
                            <div class="image-container image-right" style="background-image: url('../theme/img/bg1.jpg')"></div>
                            <h3>EmerAct</h3>
                            <p>Menyediakan informasi mengenai layanan-layanan yang ada disekitar masyarakat sepeti polisi, rumah sakit, pemadan kebakaran dan ambulan.
                            </p>
                            <p>
                                EMerAct juga menyediakan beberapa fitur yaitu fitur riview dan fitur rating sehingga masyarakat jakarta bisa memberikan penilaian kepada lembanga-lembaga tersebut, dan lembaga-lembaga tersebut bisa menjadikannya sebagai salah satu driver untuk lebih meningkatkan lagi kualitas pelayanannya.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-team text-center" data-background-color=orange>
            <div class="container">
                <h2 class="title">Pilih Layanan Darurat</h2>
                <div class="separator separator-default"></div>
                <br><br>
                <div class="team">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="team-player">
                                <img src="../img/pospolisi.jpg" alt="Thumbnail Image" class="img-fluid img-raised">
                                <h4 class="title">Pos Polisi</h4>
                                <p class="category text-default">Layanan Darurat</p>
                                <a href="{{ route('showAddReview', ['review_layanan' => 'posPolisi']) }}"><button class="btn btn-neutral btn-round">Berikan Review</button></a>
                                <a href="{{ route('showMap', ['review_layanan' => 'posPolisi']) }}"><button class="btn btn-warning btn-round">Lihat Lokasi</button></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team-player">
                                <img src="../img/ambulance.jpg" alt="Thumbnail Image" class="img-fluid img-raised">
                                <h4 class="title">Ambulance</h4>
                                <p class="category text-default">Layanan Darurat</p>
                                <a href="{{ route('showAddReview', ['review_layanan' => 'ambulance']) }}"><button class="btn btn-neutral btn-round">Berikan Review</button></a>
                                <a href="{{ route('showMap', ['review_layanan' => 'ambulance']) }}"><button class="btn btn-warning btn-round">Lihat Lokasi</button></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team-player">
                                <img src="../img/rumahsakit.jpg" alt="Thumbnail Image" class="img-fluid img-raised">
                                <h4 class="title">Rumah Sakit</h4>
                                <p class="category text-default">Layanan Darurat</p>
                                <a href="{{ route('showAddReview', ['review_layanan' => 'rumahSakit']) }}"><button class="btn btn-neutral btn-round">Berikan Review</button></a>
                                <a href="{{ route('showMap', ['review_layanan' => 'rumahSakit']) }}"><button class="btn btn-warning btn-round">Lihat Lokasi</button></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team-player">
                                <img src="../img/pospemadam.jpg" alt="Thumbnail Image" class="img-fluid img-raised">
                                <h4 class="title">Pos Pemadam</h4>
                                <p class="category text-default">Layanan Darurat</p>
                                <a href="{{ route('showAddReview', ['review_layanan' => 'posPemadam']) }}"><button class="btn btn-neutral btn-round">Berikan Review</button></a>
                                <a href="{{ route('showMap', ['review_layanan' => 'posPemadam']) }}"><button class="btn btn-warning btn-round">Lihat Lokasi</button></a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <a href="{{ route('listReview') }}"><button class="btn btn-neutral btn-lg btn-round">Lihat Semua Review</button></a>
                </div>
            </div>
        </div>

        <div class="section section-team text-center">
            <div class="container">
                <h2 class="title">Here is our team</h2>
                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="../img/aziz.png" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Abdul Aziz</h4>
                                <p class="category text-primary">CTO</p>
                                <p class="description">Chief Technology Officer - pemegang kendali tertinggi mengenai teknologi
                                    <a href="#">links</a> .</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-instagram"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="../img/fachrul.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Fachrul Hijriah Usman</h4>
                                <p class="category text-primary">CEO</p>
                                <p class="description">Chief Executive Officer - pemegang kendali dalam arah perkembangan perusahaan
                                    <a href="#">links</a> .</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="../img/eliza.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Eliza Adira</h4>
                                <p class="category text-primary">CFO</p>
                                <p class="description">Chief Financial Officer - Betugas untuk memegang kendali keuangan dalam suatu perusahaan
                                    <a href="#">links</a> .</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-google-plus"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-youtube-play"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="team-player">
                                <img src="../img/ifa.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Rifa'ah Fadhilah</h4>
                                <p class="category text-primary">CBAO</p>
                                <p class="description">Chief Bisnis Analysis Officer - Bertugas untuk mengatur kendali dari model bisnis dan insfratruktur TI yang sedang dikembangkan pada perusahaan
                                <a href="#">links</a>.</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-google-plus"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-youtube-play"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="team-player">
                                <img src="../img/dinda.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Dhinda Putri.</h4>
                                <p class="category text-primary">CMO</p>
                                <p class="description">Chief Marketing Officer - Bertugas untuk memasarkan produk-produk yang dihasilkan oleh perusahaan.
                                <a href="#">links</a>.</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-google-plus"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-youtube-play"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-team text-center" data-background-color=orange>
            <div class="container">
                <h2 class="title">Cuaca Hari Ini</h2>
                <div class="separator separator-default"></div>

                <div class="row">
                    <div class="col-lg-6 ml-auto">
                        <div class="row">
                            <div class="col-lg-6 ml-auto">
                                <h3 class="titie">{{ $response->name }} </h3>
                                <p class="title" style="color: white; font-size: 25px;">{{ $response->weather[0]->description }}</p>
                            </div>

                            <div class="col-lg-5 ml-auto">
                                <?php
                                $imgUrl = "http://openweathermap.org/img/w/".$response->weather[0]->icon.".png";
                                ?>
                                <img width="120px" src="<?php echo($imgUrl)  ?>">
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12 ml-auto">

                            @if (isset($response->wind->speed))
                                <h5><b>TEKANAN ANGIN:</b> {{ $response->wind->speed }}  </h5>
                            @else
                                <td>TEKANAN ANGIN: Data Sedang Tidak Tersedia</td>
                            @endif

                            @if (isset($response->wind->deg))
                                <h5><B>DERAJAT ANGIN:</B> {{ $response->wind->deg }} </h5>
                            @else
                                <td>DERAJAT ANGIN: Data Sedang Tidak Tersedia</td>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 mr-auto">
                        <H5>TEMPERATUR INFO</H5>
                        <table class="table table-striped" style="color: white;">
                            <TR>
                                <td>Temp</td>
                                @if (isset($response->main->temp))
                                    <td> {{ $response->main->temp }}</td>
                                @else
                                    <td>Data Sedang Tidak Tersedia</td>
                                @endif
                            </TR>
                            <TR>
                                <td>Pressure</td>
                                @if (isset($response->main->pressure))
                                    <td>{{ $response->main->pressure }}</td>
                                @else
                                    <td>Data Sedang Tidak Tersedia</td>
                                @endif
                            </TR>
                            <TR>
                                <td>Humidity</td>
                                @if (isset($response->main->humidity))
                                    <td>{{ $response->main->humidity }}</td>
                                @else
                                    <td>Data Sedang Tidak Tersedia</td>
                                @endif
                            </TR>
                            <TR>
                                <td>Temp Min</td>
                                @if (isset($response->main->temp_min))
                                    <td>{{ $response->main->temp_min }}</td>
                                @else
                                    <td>Data Sedang Tidak Tersedia</td>
                                @endif
                            </TR>
                            <TR>
                                <td>Temp Max</td>
                                @if (isset($response->main->temp_max))
                                    <td>{{ $response->main->temp_max }}</td>
                                @else
                                    <td>Data Sedang Tidak Tersedia</td>
                                @endif
                            </TR>
                            <TR>
                                <td>Sea Level</td>
                                @if (isset($response->main->sea_level))
                                    <td>{{ $response->main->sea_level }}</td>
                                @else
                                    <td>Data Sedang Tidak Tersedia</td>
                                @endif
                            </TR>
                            <TR>
                                <td>Grnd Level</td>
                                @if (isset($response->main->grnd_level))
                                    <td>{{ $response->main->grnd_level }}</td>
                                @else
                                    <td>Data Sedang Tidak Tersedia</td>
                                @endif
                            </TR>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                                MIT License
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="http://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog text-center">
          <div class="card card-signup modal-content" data-background-color="orange">
              <form class="form" method="POST" action="{{ route('register') }}">
                  {{ csrf_field() }}
                  <div class="header text-center">
                      <h4 class="title title-up">Daftar</h4>
                      <div class="social-line">
                          <a href="{{ url('/auth/facebook') }}" class="btn btn-neutral btn-facebook btn-icon btn-round">
                              <i class="fa fa-facebook-square"></i>
                          </a>
                          <a href="{{ url('/auth/twitter') }}" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round">
                              <i class="fa fa-twitter"></i>
                          </a>
                          <a href="{{ url('/auth/google') }}" class="btn btn-neutral btn-google btn-icon btn-round">
                              <i class="fa fa-google-plus"></i>
                          </a>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="input-group form-group-no-border">
                          <span class="input-group-addon">
                            <i class="now-ui-icons users_circle-08"></i>
                          </span>
                          <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" required autofocus value="{{ old('name') }}" data-validation-required-message="Silahkan masukkan nama anda">

                          </div>
                          <p class="help-block text-danger"></p>

                          @if ($errors->has('name') && session('last_auth_attempt') == 'register')
                              <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                      </div>

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <div class="input-group form-group-no-border">
                              <span class="input-group-addon">
                                  <i class="now-ui-icons text_caps-small"></i>
                              </span>
                              <input type="email" name="email" id="email" class="form-control" placeholder="Alamat Email" required autofocus value="{{ old('email') }}" data-validation-required-message="Silahkan masukkan email anda" />

                          </div>
                          <p class="help-block text-danger"></p>

                          @if ($errors->has('email') && session('last_auth_attempt') == 'register')
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <div class="input-group form-group-no-border">
                              <span class="input-group-addon">
                                  <i class="now-ui-icons ui-1_email-85"></i>
                              </span>
                              <input type="password" name="password" id="password" class="form-control" placeholder="Kata Sandi" required data-validation-required-message="Silahkan masukkan password anda">

                          </div>
                          <p class="help-block text-danger"></p>

                          @if ($errors->has('password') && session('last_auth_attempt') == 'register')
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>

                      <div class="form-group">
                          <div class="input-group form-group-no-border">
                              <span class="input-group-addon">
                                  <i class="now-ui-icons ui-1_email-85"></i>
                              </span>
                              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Konfirmasi Kata Sandi" required data-validation-required-message="Silahkan masukkan password anda">

                          </div>
                          <p class="help-block text-danger"></p>

                          @if ($errors->has('password') && session('last_auth_attempt') == 'register')
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>

                        <!-- If you want to add a checkbox to this form, uncomment this code -->
                        <!-- <div class="checkbox">
        <input id="checkboxSignup" type="checkbox">
          <label for="checkboxSignup">
          Unchecked
          </label>
          </div> -->
                  </div>
                  <div class="footer text-center">
                      <button type="submit" class="btn btn-neutral btn-round btn-lg">Daftar Sekarang
                      </button>
                  </div>
              </form>
          </div>
        </div>
    </div>
    <!--  End Modal -->

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog text-center">
            <div class="card card-signup modal-content" data-background-color="orange">
                <form class="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="header text-center">
                        <h4 class="title title-up">Masuk</h4>
                        <div class="social-line">
                            <a href="{{ url('/auth/facebook') }}" class="btn btn-neutral btn-facebook btn-icon btn-round">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a href="{{ url('/auth/twitter') }}" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="{{ url('/auth/google') }}" class="btn btn-neutral btn-google btn-icon btn-round">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-group form-group-no-border">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="email" name="email" class="form-control" placeholder="Email"  required autofocus value="{{ old('email') }}" data-validation-required-message="Silahkan masukkan email anda">
                            </div>
                            <p class="help-block text-danger"></p>

                            @if ($errors->has('email') && session('last_auth_attempt') == 'login')
                                <span class="help-block">
                                     <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-group form-group-no-border">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                                <input type="password" name="password" class="form-control" placeholder="Kata Sandi" required autofocus data-validation-required-message="Silahkan masukkan password anda"/>
                            </div>
                            @if ($errors->has('password') && session('last_auth_attempt') == 'login')
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="footer text-center">
                        <button type="submit"  class="btn btn-neutral btn-round btn-lg">Masuk Sekarang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--  End Modal -->

    <!-- Notif Modal -->
    <div class="modal fade" id="notifnologin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog text-center">
            <div class="card card-signup modal-content" data-background-color="orange">
                <br>
                <h5 class="h5">Silahka Login Terlebih dahulu</h5>
            </div>
        </div>
    </div>
    <!--  End Modal -->

    <!--   Core JS Files   -->
    <script src="../theme/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="../theme/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../theme/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="../theme/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../theme/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="../theme/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="../theme/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    @if ($errors->any() && session('last_auth_attempt') == "register" )
        <script type="text/javascript">
        session('last_auth_attempt') = null;
        $(window).on('load',function(){
          $('#registerModal').modal('show');
        });

      </script>
    @elseif ($errors->any() && session('last_auth_attempt') == "login" )
        <script type="text/javascript">
        $(window).on('load',function(){
          $('#loginModal').modal('show');
        });
        session('last_auth_attempt') = null;

        </script>
    @endif

    @include('sweet::alert');

</body>


</html>
