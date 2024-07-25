@extends('partials.main')


@section('content')
    @include('partials.navbar')
    <section class="bg-white flex items-center justify-center min-h-screen ">
        <div class="flex bg-[#eee] shadow-lg rounded-lg overflow-hidden w-2/5 max-h-[60dvh] relative items-center">
            <div id="imageContainer"
                class="shift-right absolute w-1/2 h-full overflow-hidden transform transition-transform duration-500">
                <img src="{{ asset('image/img-login.jpg') }}" alt="" class="w-full h-full object-cover object-left">
            </div>
            {{-- login --}}
            <div id="loginContainer" class="w-1/2 p-8 bg-[#eee]">
                <h2 class="text-6xl font-bold mb-6 text-center ">Sh<span class="text-sky-600">op</span></h2>
                {{-- <form action="" method="POST">
                @csrf --}}
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" id="username" placeholder="username"
                        class="italic mt-1 block w-full p-2 border rounded-md text-sm">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" placeholder="password"
                        class="italic mt-1 block w-full p-2 border rounded-md text-sm">
                </div>
                <div class="mb-4 flex justify-between items-center">
                    <div>
                        {{-- <input type="checkbox" name="remember" id="remember">
                        <label for="remember" class="text-sm font-medium text-gray-700">Remember Me</label> --}}
                    </div>
                    <a href="" class="text-xs text-sky-600 font-poppins">Forgot your password?</a>
                </div>
                <button id="btnLogin" class="w-full bg-blue-500 text-white p-2 rounded-md">Sign In</button>
                {{-- </form> --}}

                <p class="mt-3 text-center text-sm font-poppins">don't have an account? <button id="registerButton"
                        class="font-bold text-blue-500 font-poppins">Sign Up here</button></p>
            </div>
            {{-- register --}}
            <div class="w-1/2 p-8 bg-[#eee]">
                <h2 class="text-6xl font-bold mb-6 text-center ">Sh<span class="text-sky-600">op</span></h2>
                {{-- <form action="" method="POST">
                    @csrf --}}
                    <div class="mb-4">
                        <label for="username" class="block text-sm font-medium text-gray-700" >Username</label>
                        <input type="text" name="regUsername" id="regUsername" placeholder="Username"
                            class="mt-1 block w-full p-2 border rounded-md italic text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700" >Email</label>
                        <input type="email" name="regEmail" id="regEmail" placeholder="Email"
                            class="mt-1 block w-full p-2 border rounded-md italic text-sm">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="regPassword" id="regPassword" placeholder="Password"
                            class="mt-1 block w-full p-2 border rounded-md italic text-sm">
                            <div class="err"></div>
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                            Password</label>
                        <input type="password" name="regPassword_confirmation" id="regPassword_confirmation"
                            placeholder="Confirm Password" class="mt-1 block w-full p-2 border rounded-md italic text-sm">

                    </div>
                    <button id="btnregist" class="w-full bg-blue-500 text-white p-2 rounded-md font-poppins">Sign
                        Up</button>
                {{-- </form> --}}

                <p class="mt-3 text-center text-sm font-poppins">already have an account? <button id="loginButton"
                        class="font-bold text-blue-500 font-poppins">Sign In!</button></p>

            </div>
        </div>

    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#btnLogin").click(function(event) {
                event.preventDefault();

                var email = $("#username").val().trim();
                var password = $("#password").val().trim();
                if (!email) {
                    showMessage("error", "Masukkan Username");
                    return;
                } else if (!password) {
                    showMessage("error", "Masukkan Password");
                    return;
                }


                if (/\s/.test(email)) {
                    showMessage("error", "Username tidak boleh mengandung spasi");
                    return;
                }

                if (!navigator.onLine) {
                    showMessage("error", "Koneksi Internet Error");
                    return;
                }

                Swal.fire({
                    title: "Checking...",
                    text: "Please wait while we check data.",
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    },
                });

                $.ajax({
                    type: "GET",
                    url: "{{ route('ceklogin') }}",
                    data: {
                        username: email,
                        password: password,
                    },
                    success: function(response) {
                        Swal.close();
                        if (response.status === "success") {
                            window.location.href = response.redirect_url;
                        } else {
                            showMessage("error", response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.close();
                        if (xhr.status === 401) {
                            showMessage("error", "User Tidak Ditemukan");
                        } else {
                            showMessage(
                                "error",
                                "Terjadi kesalahan. Silakan coba lagi."
                            );
                        }
                    },
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#btnregist").click(function(event) {
                event.preventDefault();
                // let username = 'fikri';
                // let email = 'fikri@gmail.com';
                // let password = '12345';

                //csrftoken jgn di hapus ya 3 variabel atas aja ganti
                let csrfToken = $('meta[name="csrf-token"]').attr('content');


                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    url: "{{ route('registrasi') }}",
                    data: {
                        username: regUsername,
                        password: regPassword,
                        email: regEmail
                    },
                    success: function(response) {
                        console.log(response);
                    }
                });
            })
        })
    </script>
@endsection
