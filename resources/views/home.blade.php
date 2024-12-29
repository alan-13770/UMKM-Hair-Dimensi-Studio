<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.landing')

    @section('title', 'Landing Page')

    @section('content')
        @include('components.navbar')
        @include('components.about')
        @include('components.menu')
        @include('components.services')
        @include('components.reservation')
        @include('components.testimonial')
        @include('components.footer')
    @endsection
    
</body>
</html>