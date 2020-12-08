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
<form action="" method="post">
    <input type="number" name="Inventment_Amount" placeholder="Lượng tiền đầu tư ban đầu">
    <input type="number" name="Yearly_Interest_Rate" placeholder="Lãi suất năm">
    <input type="number" name="Number_of_Years" placeholder="Số năm đầu tư">
    <input type="submit">
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $invent_amount = $_POST['Inventment_Amount'];
    $interest_year = $_POST['Yearly_Interest_Rate'];
    $num_of_years = $_POST['Number_of_Years'];
    $result = 0;

    for ($i = 0; $i < $num_of_years; $i++) {
        $result = $invent_amount + ($invent_amount * ($interest_year/100));
        $invent_amount = $result;
    }
    echo $result;
}