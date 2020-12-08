<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="display_discount.php" method="post">
    <input type="text" name="Product_Description" placeholder="Mô tả của sản phẩm">
    <input type="number" name="List_Price" placeholder="Giá niêm yết của sản phẩm">
    <input type="number" name="Discount_Percent" placeholder="Tỷ lệ chiết khấu (phần trăm)">
    <button type="submit">Calculate Discount</button>
</form>
</body>
</html>