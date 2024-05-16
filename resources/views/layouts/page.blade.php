<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pod Talk</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('user/css/bootstrap-icons.css')}}">

    <link rel="stylesheet" href="{{asset('user/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('user/css/owl.theme.default.min.css')}}">

    <link href="{{asset('user/css/templatemo-pod-talk.css')}}" rel="stylesheet">

    
</head>

<body>

{{$slot}}


@include('partials.footer')


    <!-- JAVASCRIPT FILES -->
    <script src="{{asset('user/js/jquery.min.js')}}"></script>
    <script src="{{asset('user/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/js/custom.js')}}"></script>

</body>

</html>