$(document).ready(function(){
    $("#num_order").change(function(){
        var num_order = $("#num_order").val();
        // alert(num_order);
        
        var price = $("#price").text();
        var data = {num_order : num_order, price : price};
        // console.log(data);
        $.ajax({
            url: 'process.php',
            method: 'POST',
            data: data,
            dataType: 'json',
            success: function(data){
                //xử lý dữ liệu trả về
                // console.log(data);
                // alert(data.total);
                $("#total").text(data.total);
                // $("#total").html("<strong>" + data + "</strong>");
            }
        });
    });
});