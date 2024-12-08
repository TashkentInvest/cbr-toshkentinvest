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


        @media(max-width: 757px) {
            .home-header .header_logo {
                /* background-image: url(../images/home-logo.svg); */
                display: none !important;
            }
        }
    </style>

    @include('inc.__frontend_footer')

</body>

</html>
