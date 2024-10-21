<!DOCTYPE html>
<html>
  <head>
    @include('inc.__frontend_head')
  </head>
  <body class="">
    <!-- Yandex.Metrika counter -->

    <!-- /Yandex.Metrika counter -->

    @include('inc.__frontend_home_nav')
   
   @yield('frontend_content')

    <style>
      .footer_top {
        float: right;
      }
    </style>
    
    @include('inc.__frontend_footer')

  </body>
</html>
