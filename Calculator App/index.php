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
<h1>Simple Calculator</h1>
<form action="" method="post">
    <input type="number" name="input1" placeholder="Số thứ nhất"><br>
    <select name="operator">
        <option value="+">Cộng</option>
        <option value="-">Trừ</option>
        <option value="*">Nhân</option>
        <option value="/">Chia</option>
    </select><br>
    <input type="number" name="input2" placeholder="Số thứ hai"><br>
    <button>Tính</button>
</form>
</body>
</html>
<?php
function calc($num1, $operator, $num2){
    switch ($operator){
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        case "/":
            return $num1 / $num2;
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $num1 = $_POST['input1'];
    $operator = $_POST['operator'];
    $num2 = $_POST['input2'];

    $result = calc($num1, $operator, $num2);
    echo "Result: $result";
}