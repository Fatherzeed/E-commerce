$(document).ready(function () {
    $("#arrow-left").click(function () {
        $("#kategoriContainer").animate({ scrollLeft: "-=360px" }, 150);
    });

    $("#arrow-right").click(function () {
        $("#kategoriContainer").animate({ scrollLeft: "+=360px" }, 150);
    });
});

$(document).ready(function () {
    $("#collectionContainer").mouseenter(function () {
        $("#arrow-left").removeClass("arrowleftLeave").addClass("arrowleftEnter");
        $("#arrow-right").removeClass("arrowrightLeave").addClass("arrowrightEnter");
    });
    $("#collectionContainer").mouseleave(function () {
        $("#arrow-left").removeClass("arrowleftEnter").addClass("arrowleftLeave");
        $("#arrow-right").removeClass("arrowrightEnter").addClass("arrowrightLeave");
    });
});


