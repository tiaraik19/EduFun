<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edu Fun</title>
    <link rel="stylesheet" href="{{ asset('bootstrap5/css/bootstrap.min.css') }}">
 

</head>
<body>
    <script src="{{ asset('bootstrap5/js/bootstrap.bundle.min.js') }}"></script>

    @include('component.navbar')
    @yield('content')
    @include('component.footer')
</body>
</html>

