<!DOCTYPE html>
<html lang="en">

  <head>

  @include('layouts.meta')

  @yield('title')

  @include('layouts.css')

  @yield('css')

  </head>

  <body id="page-top">

    <!-- Navigation -->
  @include('layouts.nav')

  <!-- <div class="container theme-showcase" role="main"> -->
      @yield('content')
  <!-- </div> -->

    <!-- Footer -->
  @include('layouts.bottom')


  @include('layouts.scripts')

  
  @yield('scripts')

  </body>

</html>
