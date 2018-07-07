<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="" name="keywords">
<meta content="" name="description">

<!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
<meta property="og:title" content="">
<meta property="og:image" content="">
<meta property="og:url" content="">
<meta property="og:site_name" content="">
<meta property="og:description" content="">

<!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="">


<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Sagar Gautam')</title>

@section('assets')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@show()
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<!-- <div id="preloader"></div> -->

@section('top_header')
@show

@section('header')
@show()
@yield('content')

@section('footer')
@show()

@section('imports')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script>
        var base_url = '{{ url('') }}';
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

    </script>

  <!-- Required JavaScript Libraries -->
  <script src="{{asset('js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('js/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('js/lib/morphext/morphext.min.js')}}"></script>
  <script src="{{asset('js/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('js/lib/stickyjs/sticky.js')}}"></script>
  <script src="{{asset('js/lib/easing/easing.js')}}"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="{{ asset('js/app.js') }}"></script>
@show()
</body>
</html>