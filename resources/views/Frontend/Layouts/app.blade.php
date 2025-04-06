<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('Frontend.Partials.head')
    <title>Facebook|ads</title>
</head>
<body>
@include('Frontend.Partials.header')
@yield('content')

@include('Frontend.Partials.footer')


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{asset('Frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('Frontend/assets/js/all.min.js')}}"></script>
<script src="{{asset('Frontend/assets/js/script.js')}}"></script>
</body>
</html>
