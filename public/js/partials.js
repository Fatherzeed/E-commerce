// Navbar

$(document).ready(function () {
    // Toggle dropdown on profile container click
    $("#profileContainer").click(function (event) {
        event.stopPropagation(); // Prevent the click from bubbling up to the document
        $("#dropdownContainer").toggle();
    });

    // Hide dropdown when clicking outside of it
    $(document).click(function (event) {
        if (!$(event.target).closest("#profileContainer, #dropdownContainer").length) {
            $("#dropdownContainer").hide();
        }
    });
});



// Cart Sidebar

$("#openCartBtn").click(function () {
    $("#cartbar").removeClass("closecart").addClass("opencart");
    $(".overlay").css("display", "block");
});

$("#closeCartBtn").click(function () {
    $("#cartbar").removeClass("opencart").addClass("closecart");
    $(".overlay").css("display", "none");
});

$(".overlay").click(function () {
    $("#cartbar").removeClass("opencart").addClass("closecart");
    $(".overlay").css("display", "none");
});
