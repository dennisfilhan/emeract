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
          <div class="page-header-image" data-parallax="true" style="background-image: url('../img/newsback.jpg');">
          </div>
          <div class="container">
              <div class="content-center">
                  <h1 class="title">Berita Populer Hari Ini.</h1>
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
        <div class="section section-team text-center">
            <div class="container">
                <div class="row">
              	     <div class="col-lg-10 mx-auto">
            			        <table class="table table-striped">
            				            <tbody>
                        				    <?php
                                      $news =null;

                                      if ($response->articles != null){
                                          $news = $response->articles;
                                      }
                        			      	?>
                        			      	@if(count($news) > 0)
                            					    @foreach($news as $item)
                                					    <tr>
                                			      			<td>
                                			      				  <div class="row">
                                    			      					<div class="col-lg-4 ml-auto">
                                    			      					    <img width="100%"  style="vertical-align:middle"  src="{{ $item->urlToImage }}">
                                    			      					</div>
                                    			      					<div class="col-lg-8 ml-auto" style="padding-left: 20px">
                                    								          <h5>{{ $item->title }}</h5>
                                    								          <p style="font-size: 14px">{{ $item->publishedAt }}<p>
                                    								          <p>{{ $item->description }} <a href="{{ $item->url }}">Read More</a> </p>
                                    			      					</div>
                                    			      			    </div>
                                	   				    	</td>
                                					    </tr>
                            						  @endforeach
                        				      @else
                        					        <h1> Sorry, nothing to show...</h1>
                        					    @endif
        				            </tbody>
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
