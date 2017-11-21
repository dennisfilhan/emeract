    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/">EmerAct</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/news">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/weather">Cuaca</a>
            </li>

            @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a href="nav-link js-scroll-trigger" class="nav-link js-scroll-trigger dropdown-toggle"
                           data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a style="padding: 8px;" href="/logout"
                                   onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>

                    <li class=""><img class="circ" src="{{ Gravatar::get(Auth::user()->email)  }}"></li>
            @else
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/register">Register</a>
            </li>


            @endif
          </ul>
        </div>
      </div>
    </nav>
