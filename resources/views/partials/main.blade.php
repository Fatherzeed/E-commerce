<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/build/assets/app-63d638de.css">
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.css') }}">
    @vite('resources/css/app.css')


    <title>@yield('title')</title>
</head>

<body class="overflow-x-hidden">
    <div class="overlay duration-300 ease-in-out"></div>
    @yield('content')



    <script src="/js/partials.js"></script>
    <script src="/js/homeProduct.js"></script>
    <script src="/js/login.js"></script>
    <script src="/build/assets/app-9b01a8f6.js"></script>
    <script type="text/javascript" src="{{ asset('js/sweetalert2.js') }}"></script>
    <script>
        function showMessage(type, message) {

            if (!type || type === '' || !message || message === '') {
                return;
            }

            return Swal.fire({
                icon: type,
                title: message,
                showConfirmButton: false,
                timer: 2000
            })

        }
    </script>
    @yield('script')
</body>

</html>
