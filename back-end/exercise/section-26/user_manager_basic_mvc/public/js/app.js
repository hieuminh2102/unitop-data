$(document).ready(function () {
    $("#check_ajax").click(function () {
        var data_id = $(this).attr('data_id');
        // alert(data_id);
        var data = { hehe: data_id };
        // console.log(data);
        $.ajax({
            url: '?mod=order&action=update',
            method: 'POST',
            data: data,
            dataType: 'text',
            success: function (data) {
                //xử lý dữ liệu trả về
                alert(data);
            }
        });
    });
});