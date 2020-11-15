$(document).ready(function(){
    // alert('nỘI DUNG ĐƯỢC hiển thị bởi jquery');
    $("a#change_color").click(function(){
        alert("Đã click");
        $(this).prev('h1').addClass("change_color");
        return false;
    });
});