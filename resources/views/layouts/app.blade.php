<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{--TODO--}}
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <title>Client | @yield('title')</title>

    <!-- Font awesome CSS-->
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Public CSS-->
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/css/prettyPhoto.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/css/price-range.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet" media="all">

    <!-- Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

</head>

<body>

    @include('layouts.header')

    <section>
        @yield('content')
    </section>

    @include('layouts.footer')

    <!-- Jquery JS -->
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <!-- Public JS -->
    <script src="{{ asset('/js/contract.js') }}"></script>
    <script src="{{ asset('/js/gmaps.js') }}"></script>
    <script src="{{ asset('/js/html5shiv.js') }}"></script>
    <script src="{{ asset('/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('/js/price-range.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('/js/main.js') }}"></script>

    @yield('scripts')

</body>
</html>
