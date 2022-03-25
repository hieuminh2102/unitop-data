// $(document).ready(function(){
//     // alert("ok");
//     $(".num-order").change(function(){
//         // alert("changed");
//         var qty = $(this).val(); //lấy số lượng của .num-order
//         var id = $(this).attr("data-id"); // lấy id của sản phẩm mà ta còn thao tác với nó
//         var data = {id : id, qty : qty};
//         console.log(data);
//         $.ajax({
//             url: '?mod=cart&controller=index&action=update_ajax',//Trang xử lí mặc định trang hiện tại
//             method: 'POST',//$_POST hoặc $_GET, mặc định GET
//             data: data,//Dữ liệu truyền lên server
//             dataType: 'text',// trả về dạng html,text, script hoặc json
//             success: function (data) {
//                 alert("đã kết nối ok");
//                 alert(data);
                
//                 $("#sub-total-"+id).text(data);
//                 // $("#total-price span").text(data.total);
//                 // console.log(data);
//             },
//             error: function (xhr, ajaxOptions, throwError) {//Phương thức lỗi
//                 alert(xhr.status);//Dòng hiển thị thông tin
//                 alert(throwError);//Chi tiết lỗi
//             }
//         });
//     })
// })