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
