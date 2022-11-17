<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- {{asset('css/bootstrap.min.css')}} is asset is public folder, in css folder, bootstrap.min.css file -->
    
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <title>@yield('title')</title>
    
</head>
<body class="bg-secondary">

    <!--  include_once from navigation.blade.php file in shareData folder-->
    @include('shareData.navigation') 

    @yield('content')
    
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- {{asset('js/bootstrap.min.js')}} is asset is public folder, in js folder, bootstrap.min.js file -->
    
    <!-- JavaScript Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>

