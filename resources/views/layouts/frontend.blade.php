<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
    <title>Document</title>
</head>
<body>
    <div>
        @include('layouts.inc.navbar')
        @yield('content')
    </div>
    <script src="{{asset('frontend/js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.js')}}"></script>
</body>
</html>