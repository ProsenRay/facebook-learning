<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    @include('Partials.head')
</head>
<body >
<div class="page">
    <!-- Sidebar -->
    @include('Partials.nav')
    <!-- Navbar -->
    @include('Partials.header')
    <div class="page-wrapper">
        @stack('page-header')
        <!-- Page body -->
        <div class="page-body">
            @yield('content')
        </div>
        @include('Partials.footer')
    </div>
</div>

@stack('lib-js')
<!-- Tabler Core -->
<script src="{{asset('assets/js/tabler.min.js')}}" defer></script>

@stack('js')



</body>
</html>
