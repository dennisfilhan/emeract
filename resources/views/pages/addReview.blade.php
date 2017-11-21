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

     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<body class="landing-page sidebar-collapse">
    <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-primary fixed-top" color-on-scroll="400">
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
       <div class="page-header page-header-small clear-filter" filter-color="orange">
          <div class="page-header-image" data-parallax="true" style="background-image: url('../img/kantor-pemprov-dki.jpg');">
          </div>
          <div class="container">
              <div class="content-center">
                  <h1 class="title">Ayo majukan DKI Jakarta !</h1>
                  <div class="text-center">
                      <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                          <i class="fa fa-facebook-square"></i>
                      </a>
                      <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                          <i class="fa fa-twitter"></i>
                      </a>
                      <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                          <i class="fa fa-google-plus"></i>
                      </a>
                  </div>
              </div>
          </div>
        </div>
        {{-- <div class="section section-team text-center">
            <div class="container">
                @foreach ($data as $key => $value)
                    {{ $value }} <br>
                @endforeach

            </div>
        </div> --}}
        <div class="section section-contact-us text-center">
            <div class="container">
                <h2 class="title">Form Aspirasi Layanan Pemprov DKi?</h2>
                <p class="description">Silahkan isi data data dengan benar dan jujur sesuai dengan fakta dan harapa anda untuk layanan darurat di area DKI</p>
                <div class="row">
                    <div class="col-lg-8 text-center col-md-12 ml-auto mr-auto">
                        <form class="form" method="POST" action="{{ route('addReview') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}


                            <div class="input-group input-lg">
                                <select class="form-control" style="height:50px;" name="review_type" id="">
                                    <option value="">Pilih Jenis Review</option>
                                    <option value="Laporan Operasional">Laporan Kinerja</option>
                                    <option value="Testimoni Layanan">Testimoni Layanan</option>
                                </select>
                            </div>

                            <div class="input-group input-lg">
                                <input class="form-control" id="service_identifier" name="service_identifier" placeholder="Masukkan nama layanan" type="text">

                                {{-- <select class="form-control" style="height:50px;" name="service_identifier">
                                    <option value="none">Pilih Layanan {{ $reviewType }}</option>
                                    @foreach ($data as $key => $value)
                                      <option value="{{ $value }}">{{ $value }}</option>
                                    @endforeach
                                </select> --}}
                            </div>

                            <div class="input-group input-lg" style="padding:10px;">
                              <div class="radio" style="margin-left:20px;">
                                  <p>Berikan penilaian layanan !</p>
                                  {{-- <input id="input-id" name="ratting" type="number" class="rating" min=0 max=5 step=1 data-size="md" data-rtl="false"> --}}

                                  <input type="radio" name="ratting" id="1" value="1">
                                  <label for="1">
                                      1
                                  </label>

                                  <input type="radio" name="ratting" id="2" value="3">
                                  <label for="2">
                                      2
                                  </label>

                                  <input type="radio" name="ratting" id="3" value="3">
                                  <label for="3">
                                      3
                                  </label>

                                  <input type="radio" name="ratting" id="4" value="4">
                                  <label for="4">
                                      4
                                  </label>

                                  <input type="radio" name="ratting" id="5" value="5">
                                  <label for="5">
                                      5
                                  </label>
                              </div>
                            </div>


                            <div class="textarea-container" style="margin-left:20px;">
                                <p style="text-align:left;">Berikan penilaian layanan !</p>
                                <textarea class="form-control" name="review_content" rows="4" cols="80" placeholder="Isikan review anda"></textarea>
                            </div>

                            {{-- <div class="input-group input-lg">
                            </div> --}}
                            <div class="input-group input-lg">
                                <div class="row">
                                    <div class="col-md-12" style="margin-left:20px;">
                                        <p style="text-align:left;">Tambahkan informasi gambar (Optional)</p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="/img/placeholder.png" id="img_review_tag"  style="padding:5px; margin-bottom:10px;" class="img-raised" width="200px" height="200px" />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="file" name="img_review" id="img_review">
                                    </div>
                                </div>
                            </div>

                            <div class="send-button">
                                <button type="submit" class="btn btn-primary btn-round btn-block btn-lg">Submit Review
                                </button>
                            </div>
                       </form>
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

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>

        $(function() {
        var availableTags =  {!! json_encode($data) !!};
            $( "#service_identifier" ).autocomplete({
            source: availableTags,
            minLength: 0
            }).focus(function(){
                //Use the below line instead of triggering keydown
                $(this).data("autocomplete").search($(this).val());
            });
        });

    </script>

    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img_review_tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#img_review").change(function(){
            readURL(this);
        });
    </script>


    @if ($errors->any() && session('last_auth_attempt') == "register" )
        <script type="text/javascript">
        $(window).on('load',function(){
          $('#registerModal').modal('show');
        });

      </script>
    @elseif ($errors->any() && session('last_auth_attempt') == "login" )
        <script type="text/javascript">
        $(window).on('load',function(){
          $('#loginModal').modal('show');
        });
        </script>
    @endif

</body>


</html>
