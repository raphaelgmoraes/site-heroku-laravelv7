<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO -->
    {!! $head ?? '' !!}
    <!-- END SEO -->
    
    <!-- External CSS -->
    <link rel="stylesheet" href="{{ mix_h('front/assets/css/vendor.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    @yield('stylesheet')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ mix_h('front/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>


    @include('front.includes.header')

    @yield('content')

    @include('front.includes.footer')

    <!-- External JS -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="{{ mix_h('front/assets/js/vendor.js') }}"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     
    <!-- Main JS -->
    <script src="{{ mix_h('front/assets/js/app.js') }} "></script>
    <script src="//localhost:35729/livereload.js"></script>
</body>
</html>