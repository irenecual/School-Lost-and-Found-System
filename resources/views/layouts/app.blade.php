<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
  rel="stylesheet"
/>

<!-- Icons. Uncomment required icon fonts -->
<link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{asset('assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
<link rel="stylesheet" href="{{asset('assets\vendor\css\pages\page-auth.css')}}">

<!-- Page CSS -->

<!-- Helpers -->
<script src="{{asset('assets/vendor/js/helpers.js')}}"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{'assets/js/config.js'}}"></script>

    <!-- Scripts -->
   
</head>
<body>
    <div id="app">
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
    <script src="{{asset('assets/js/pages-auth.js')}}"></script>    
   
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    
</body>
</html>