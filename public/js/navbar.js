$(document).ready(function () {
    $("#navbarToggleBtn").click(function () {
        if ($("#hamburgerIcon").css("display") === "none") {
            $("#hamburgerIcon").css("display", "block");
            $("#closeIcon").css("display", "none");
        } else {
            $("#hamburgerIcon").css("display", "none");
            $("#closeIcon").css("display", "block");
        }
    });
});

$(document).ready(function () {
    $(".drop_mb_n").click(function () {
        $(this).closest("li").find(".mb_sub_menu").slideToggle();

        $(this).find("i").toggleClass("fa-chevron-down fa-chevron-up");
    });

});
