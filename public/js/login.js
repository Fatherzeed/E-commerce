document.addEventListener("DOMContentLoaded", function () {
    const imageContainer = document.getElementById("imageContainer");
    const registerButton = document.getElementById("registerButton");
    const loginButton = document.getElementById("loginButton");

    registerButton.addEventListener("click", function () {
        imageContainer.classList.add("shift-left");
        imageContainer.classList.remove("shift-right");
    });

    loginButton.addEventListener("click", function () {
        imageContainer.classList.add("shift-right");
        imageContainer.classList.remove("shift-left");
    });
});
