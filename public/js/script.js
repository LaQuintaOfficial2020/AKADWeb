$(function () {
    if ($(".take-exam").length) {
        $(".side-nav").css("display", "none");
        $(".main-body").removeClass("col-10").addClass("col-12");
    } else {
        $(".side-nav").css("display", "block");
        $(".main-body").removeClass("col-12").addClass("col-10");
    }

    $(".main-view").slimScroll({
        height: "250px !important",
    });

    $(".exam-body").slimScroll({
        height: "800px !important",
    });

    $(".table-activities").slimScroll({
        height: "250px !important",
    });

    console.log($(".table-activities").length);
});
