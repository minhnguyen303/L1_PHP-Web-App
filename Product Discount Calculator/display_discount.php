<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Product_Description = $_POST['product_description'];
    $List_Price = $_POST['list_price'];
    $Discount_Percent = $_POST['discount_percent'];

    $discountAmount = $List_Price * $Discount_Percent * 0.01;
    $discountPrice = $List_Price - $discountAmount;

    echo "Mô tả của sản phẩm: " . $Product_Description .
        "<br>Giá niêm yết của sản phẩm: " . $List_Price .
        "<br>Tỷ lệ chiết khấu (phần trăm): " . $Discount_Percent . "%" .
        "<br><br>Lượng chiết khấu: " . $discountAmount .
        "<br>Giá sau khi đã được chiết khấu: " . $discountPrice;
}
