<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Làm việc với Ajax</title>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/app.js"></script>
</head>

<body>
    <!-- <a href="" id="click_me">Click me</a> -->
    <h1>Tính toán bằng Ajax</h1>
   <form action="" method="post">
       <p>Giá: <span id="price">10</span></p>
       <label for="">Số lượng: </label>
       <input type="number" min="0" max="20" value="0" name="num_order" id="num_order">
       <hr/>
       <p>Tổng: <span id="total">0</span></p>
   </form>
</body>

</html>