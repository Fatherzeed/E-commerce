// Navbar

// Cart Sidebar

$("#openCartBtn").click(function () {
    $("#cartbar").removeClass("closecart").addClass("opencart");
    $(".overlay").css("display","block");
});

$("#closeCartBtn").click(function () {
    $("#cartbar").removeClass("opencart").addClass("closecart");
    $(".overlay").css("display","none");
});

$('.overlay').click(function(){
    $("#cartbar").removeClass("opencart").addClass("closecart");    
    $(".overlay").css("display","none");
})
