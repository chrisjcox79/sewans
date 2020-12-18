<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title','Home')</title>
    <meta name="description" content="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('home/assets/images/favicon.png') }}" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/plugins.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/style.css?x') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/responsive.css?x') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ==" crossorigin="anonymous" /></head>

<body class="template-index index-demo2">
    {{-- <div id="pre-loader">
        <img src="{{ asset('assets/images/Spinner-1s-200px.gif') }}" alt="Loading..." />
    </div> --}}


    <div class="page-wrapper">

        <!--Header-->
        @include('home.layouts._header')
        <!--End Header-->
        <!--Mobile Menu-->
        @include('home.layouts._mobile')
        <!--End Mobile Menu-->
         <div class="error-msg"></div>
        @yield('content')

        <!--End Page Wrapper-->

        <!--Footer-->
        @include('home.layouts._footer')
        <!--End Footer-->

        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon anm anm-arw-up"></i></span>
        <!--End Scoll Top-->

        <!--MiniCart Drawer-->
        @include('home.layouts._minicart')
        <!--End MiniCart Drawer-->

        <!--Quickview Popup-->
        @include('home.layouts._quickview')
        <!--End Quickview Popup-->
    </div>




    <!-- Including Jquery -->
    <script src="{{ asset('home/assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ==" crossorigin="anonymous" />

    <script src="{{ asset('home/assets/js/vendor/js.cookie.js') }}"></script>
    <!-- Including Javascript -->
    <script src="{{ asset('home/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('home/assets/js/main.js?') }}"></script>
    {{-- <script src="{{ asset(mix('js/app.js')) }}"></script> --}}
        {{-- @yield('js') --}}
</body>

</html>
