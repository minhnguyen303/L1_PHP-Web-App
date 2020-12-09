<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Chuyển số thành chữ tiếng Anh</h2>
<form method="post">
    <input type="number" name="numInput" placeholder="Nhập số X, 0 < X < 1000"/>
    <input type="submit" id="submit" value="Chuyển"/>
</form>
</body>
</html>
<?php
include_once "convert-number.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["numInput"];
    $result = convertToWord($number);

    echo 'Tiếng anh đọc là: ' . $result;
}
?>