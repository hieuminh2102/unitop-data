$(document).ready(function () {
    $("#icon-menu-responsive").click(function () {
       $("#site").toggleClass("open-respon-menu");
        return false;
    });
    $(window).resize(function () {
        // Nếu màn hình có độ rộng lớn hơn 768px thì nó phải ẩn đi
        if ($(document).width() >= 768) {
            $("#site").removeClass("open-respon-menu");
        }
    });
});