// Gambar login-register

$(document).ready(function () {
    const $imageContainer = $("#imageContainer");
    const $registerButton = $("#registerButton");
    const $loginButton = $("#loginButton");

    $registerButton.click(function () {
        $imageContainer.addClass("shift-left").removeClass("shift-right");
    });

    $loginButton.click(function () {
        $imageContainer.addClass("shift-right").removeClass("shift-left");
    });
});

// verifikasi

$(document).ready(function () {
    $("#btnLogin").click(function () {
        var email = $("#username").val();
        var password = $("#password").val();

        if (!email) {
            showMessage("error", "Masukkan Username");
        } else if (!password) {
            showMessage("error", "Masukkan Password");
        }

        if (!navigator.onLine) {
            showMessage("error", "Koneksi Internet Error");
            return;
        }

        if (email && password) {
            Swal.fire({
                title: "Cheking...",
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
                success: function (response) {
                    Swal.close();
                    if (response.status === "success") {
                        window.location.href = response.redirect_url;
                    } else {
                        showMessage("error", response.message);
                    }
                },
                error: function (xhr, status, error) {
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
        }
    });
});
