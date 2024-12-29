<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Landing Page')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dist/lib/animate/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dist/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dist/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    @include('components.navbar')
    @yield('content')
    @include('components.footer')

    <script src="{{ asset('dist/js/main.js') }}"></script>
    <script src="{{ asset('dist/lib/owlcarousel/owl.carousel.min.js') }}"></script>
</body>

</html>
