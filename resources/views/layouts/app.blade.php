<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rate your favourite</title>
    <link rel="icon" href="{{url('/')}}/public/images/heart_green.ico">
    <link href="{{url('/')}}/public/css/app.css" rel="stylesheet" />
    <link href="{{url('/')}}/public/fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/public/css/webapp.css" rel="stylesheet" />
    <script src="{{url('/')}}/public/js/app.js"></script>
    <script src="{{url('/')}}/public/js/auth.js"></script>
</head>

<body>
    <div class="container-fluid">
        @include('navbar')
        @yield('content')
        @include('footer')
    </div>
</body>
</html>
