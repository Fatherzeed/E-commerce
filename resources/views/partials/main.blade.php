<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/public.css')}}">

    @vite('resources/css/app.css')

    <title>@yield('title')</title>
</head>

<body class="overflow-x-hidden">
    <div class="overlay duration-300 ease-in-out"></div>
    @yield('content')

    <script src="{{ asset('js/partials.js') }}"></script>
    @yield('script')

</body>

</html>
