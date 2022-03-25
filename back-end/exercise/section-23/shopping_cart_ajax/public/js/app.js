$(document).ready(function () {
    $(".num-order").change(function () {
        var qty = $(this).val();
        var id = $(this).attr('data-id');
        var data = { qty: qty, id: id };

        console.log(data);
        $.ajax({
            url: '?mod=cart&act=update_ajax',
            method: 'POST',
            data: data,
            dataType: 'json',
            success: function (data) {
                alert("đã kết nối ok");
                $("#sub-total-"+id).text(data.sub_total);
                $("#total-price span").text(data.total);
                console.log(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
                console.warn(xhr.responseText)
            }
        })
    })
})
