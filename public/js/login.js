// Gambar login-register

$(document).ready(function () {
    const $imageContainer = $("#imageContainer");
    const $imgLogin = $("#imgLogin");
    const $hidde = $("#hidde");
    const $registerButton = $("#registerButton");
    const $loginButton = $("#loginButton");

    $registerButton.click(function () {
        $imageContainer.addClass("shift-left").removeClass("shift-right");
    });

    $loginButton.click(function () {
        $imageContainer.addClass("shift-right").removeClass("shift-left");
    });

    $registerButton.click(function () {
        $imgLogin.addClass("img-object-left").removeClass("img-object-right");
    });

    $loginButton.click(function () {
        $imgLogin.addClass("img-object-right").removeClass("img-object-left");
    });

    $registerButton.click(function () {
        $hidde.addClass("display").removeClass("display-hidden");
    });
});

// verifikasi
