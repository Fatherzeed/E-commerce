@extends('partials.main')


@section('content')
    @include('partials.navbar')
    <section class="bg-white flex items-center justify-center min-h-screen ">
        <div class="flex bg-[#eee] shadow-lg rounded-lg overflow-hidden w-2/5 max-h-[60dvh] relative items-center h-[600px]">
            <div id="imageContainer"
                class="shift-right absolute w-1/2 h-full overflow-hidden transform transition-transform duration-500">
                <img id="imgLogin" src="{{ asset('image/img-login.jpg') }}" alt=""
                    class="w-full h-full object-cover img-object-right">

            </div>
            {{-- login --}}
            <div id="loginContainer" class="w-1/2 p-8 bg-[#eee]">
                <h2 class="text-6xl font-bold mb-6 text-center ">Sh<span class="text-sky-600">op</span></h2>

                {{-- <form action="" method="POST">
                @csrf --}}

                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>

                    <input type="text" name="username" id="username" placeholder="username"
                        class="italic mt-1 block w-full p-2 border rounded-md text-sm focus:outline-none focus:ring-1 focus:ring-sky-600">
                    <p id="error-message" class="text-xs font-poppins mt-1 text-red-500"></p>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>

                    <input type="password" name="password" id="password" placeholder="password"
                        class="italic mt-1 block w-full p-2 border rounded-md text-sm  focus:outline-none focus:ring-1 focus:ring-sky-600">
                    <p id="error-message-ps" class="text-xs font-poppins mt-1 text-red-500"></p>
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
            <div id="hidde" class="w-1/2 p-8 bg-[#eee] display-hidden">

                <h2 class="text-6xl font-bold mb-6 text-center ">Sh<span class="text-sky-600">op</span></h2>
                {{-- <form action="" method="POST">
                    @csrf --}}
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="regUsername" id="regUsername" placeholder="Username"
                        class="mt-1 block w-full p-2 border rounded-md italic text-sm  focus:outline-none focus:ring-1 focus:ring-sky-600"
                        required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="regEmail" id="regEmail" placeholder="Email"
                        class="mt-1 block w-full p-2 border rounded-md italic text-sm  focus:outline-none focus:ring-1 focus:ring-sky-600">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="regPassword" id="regPassword" placeholder="Password"
                        class="mt-1 block w-full p-2 border rounded-md italic text-sm  focus:outline-none focus:ring-1 focus:ring-sky-600">
                    <div class="err"></div>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                        Password</label>
                    <input type="password" name="regPassword_confirmation" id="regPassword_confirmation"
                        placeholder="Confirm Password"
                        class="mt-1 block w-full p-2 border rounded-md italic text-sm  focus:outline-none focus:ring-1 focus:ring-sky-600">

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

        // function validateInput(inputId, errorMessageId, message) {
        //     const input = document.getElementById(inputId);
        //     const errorMessage = document.getElementById(errorMessageId);


        //     input.addEventListener('input', function() {
        //         if (input.value.trim() === '') {
        //             errorMessage.textContent = message;
        //         } else {
        //             errorMessage.textContent = ''; 
        //         }
        //     });


        //     if (input.value.trim() === '') {
        //         errorMessage.textContent = message;
        //     } else {
        //         errorMessage.textContent = ''; 
        //     }
        // }


        // window.addEventListener('DOMContentLoaded', () => {
        //     validateInput('username', 'error-message', 'Username harus diisi');
        //     validateInput('password', 'error-message-ps', 'Password harus diisi');
        // });


        // Ini yang udah ku ubah jadi JQuerry dan Pesan muncul ketika input di klik tapi kosong
        function validateInput(inputId, errorMessageId, message) {
            const $input = $('#' + inputId);
            const $errorMessage = $('#' + errorMessageId);

            $input.on('focus', function() {
                if ($input.val().trim() === '') {
                    $errorMessage.text(message);
                }
            });

            $input.on('input', function() {
                if ($input.val().trim() === '') {
                    $errorMessage.text(message);
                } else {
                    $errorMessage.text('');
                }
            });

            $input.on('blur', function() {
                if ($input.val().trim() === '') {
                    $errorMessage.text('');
                }
            });
        }

        $(document).ready(function() {
            validateInput('username', 'error-message', 'Username harus diisi');
            validateInput('password', 'error-message-ps', 'Password harus diisi');
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#btnLogin").click(function(event) {
                event.preventDefault();

                let email = $("#username").val().trim();
                let password = $("#password").val().trim();
                let errorMessage = $("#error-message");
                let errorMessagePs = $("#error-message-ps");
                errorMessage.empty();
                errorMessagePs.empty();



                if (!email) {
                    errorMessage.text("masukkan username");
                    return;
                } else if (!password) {
                    errorMessagePs.text("masukkan password");
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

                let regUsername = $("#regUsername").val();
                let regEmail = $("#regEmail").val();
                let regPassword = $("#regPassword_confirmation").val();
                let csrfToken = $('meta[name="csrf-token"]').attr('content');

                // Sisa di buatkan validasi yang sama dengan login dengan aja nihh untuk ambil value dari inputnya pake 3 variabel di atas ini aja 


                Swal.fire({
                    title: "Saving...",
                    text: "Please wait while we saving new data.",
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    },
                });

                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    url: "{{ route('registrasi') }}",
                    data: {
                        regUsername: regUsername,
                        regPassword: regPassword,
                        regEmail: regEmail
                    },
                    success: function(response, status, xhr) {
                        Swal.close();
                        if (xhr.status === 201) {
                            showMessage("success", "User Berhasil Ditambahkan");
                        } else {
                            showMessage("error", "User Gagal Ditambahkan");
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.close();
                        if (xhr.status === 409) {
                            let errorMessage = xhr.responseJSON.error;
                            showMessage("error", errorMessage);
                        } else {
                            showMessage("error", "Terjadi kesalahan: " + error);
                        }
                    }
                });
            })
        })
    </script>
@endsection
