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
<form method="get">
    <input type="number" name="numInput" placeholder="Nhập một số < 1000"/>
    <input type="submit" id="submit" value="Chuyển"/>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $number = $_GET["numInput"];
    $result = '';
    if ($number < 10 || $number >= 0) {
        switch ($number) {
            case 0:
                $result = 'zero';
                break;
            case 1:
                $result = 'one';
                break;
            case 2:
                $result = 'two';
                break;
            case 3:
                $result = 'three';
                break;
            case 4:
                $result = 'four';
                break;
            case 5:
                $result = 'five';
                break;
            case 6:
                $result = 'six';
                break;
            case 7:
                $result = 'seven';
                break;
            case 8:
                $result = 'eight';
                break;
            case 9:
                $result = 'nine';
                break;
        }
    } elseif ($number >= 10 || $number < 20) {
        switch ($number) {
            case 10:
                $result = 'ten';
                break;
            case 11:
                $result = 'eleven';
                break;
            case 12:
                $result = 'twelve';
                break;
            case 13:
                $result = 'thirteen';
                break;
            case 15:
                $result = 'fifteen';
                break;
            case 14:
                $result = 'fourteen';
                break;
            case 16:
                $result = 'six';
                break;
            case 17:
            case 18:
            case 19:
                $result = '';
                break;
        }
    } else {
        $result = 'out of ability';
    }
    echo $number . ' : ' . $result;
}
?>