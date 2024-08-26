// Navbar

$(document).ready(function () {
    // Toggle dropdown on profile container click
    $("#profileContainer").click(function (event) {
        event.stopPropagation(); // Prevent the click from bubbling up to the document
        $("#dropdownContainer").toggle();
        $("#arrowDown").toggleClass("rotate-90");
    });

    // Hide dropdown when clicking outside of it
    $(document).click(function (event) {
        if (!$(event.target).closest("#profileContainer, #dropdownContainer").length) {
            $("#dropdownContainer").hide();
            $("#arrowDown").removeClass("rotate-90");
        }
    });
});

$(document).ready(function(){
    $("#mobileMenuButton").click(function(){
        $(".md\\:hidden").slideToggle();
        $("#closeMobileMenu").show();
    });
    $("#closeMobileMenu").click(function(){
        $(".md\\:hidden").slideToggle();
        $("#closeMobileMenu").hide();
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
