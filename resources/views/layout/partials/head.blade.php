<title>FoodPedia</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

    <!-- css -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <!-- Bootstrap CSS File -->
  <link href="{{URL::asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="{{URL::asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
  <link href="{{URL::asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <!-- google font -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Kreon:300,400,700'>
    
    <!-- js -->
    <script src="{{ URL::asset('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
    <script src="js/responsiveslides.js"></script>
    <script>
      $(function () {
        $("#slidez").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        maxwidth: 960,
        namespace: "centered-btns"
        });
      });
    </script>