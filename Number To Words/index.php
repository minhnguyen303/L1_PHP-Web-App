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

define('charNum', [
    ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'],
    ['teen', 'eleven', 'twelve', 'thirteen', '', 'fifteen'],
    ['ty', '', 'twenty', 'thirty', '', 'fif'],
    'hundred']);

function removeZero($array)
{
    return $array;
}

function transToWords($number)
{
    $len = strlen($number);
    switch ($len){
        case 1:
            $result = charNum[0][$number];
            break;
        case 2:
            $number = str_split($number);
            if ($number[1] == 1 || $number[1] == 2 || $number[1] == 3 || $number[1] == 5) {
                $number = implode($number);
                $number -= 10;
                $result = charNum[1][$number];
            } else {
                $result = charNum[0][$number[1]] . charNum[1][0];
            }
            break;
        case 3:
            $number = str_split($number);
            $hundred = $number[0];
            $subNumber = 0;
            if ($number[2] == 1 || $number[2] == 2 || $number[2] == 3 || $number[2] == 5) {
                $subNumber = $number[2];
            } else {
                $ones = charNum[0][$number[1]] . charNum[1][0];
            }
            $result = charNum[0][$hundred] . $subNumber;
            break;
        default:
            $result = 'out of ability';
    }
    /*if ($len <= 1) {
        $result = charNum[0][$number];
    } elseif ($len == 2) {
        $number = str_split($number);
        if ($number[1] == 1 || $number[1] == 2 || $number[1] == 3 || $number[1] == 5) {
            $number = implode($number);
            $number -= 10;
            $result = charNum[1][$number];
        } else {
            $result = charNum[0][$number[1]] . charNum[1][0];
        }
    } else {
        $result = 'out of ability';
    }*/
    return $result;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["numInput"];
    $result = '';


    /*if ($number < 10 || $number >= 0) {
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
            case 14:
                $result = 'fourteen';
                break;
            case 15:
                $result = 'fifteen';
                break;
            case 16:
                $result = 'sixteen';
                break;
            case 17:
                $result = 'seventeen';
                break;
            case 18:
                $result = 'eighteen';
                break;
            case 19:
                $result = 'nineteen';
                break;
        }
    } elseif ($number < 100 || $number >= 20) {

    } else {
        $result = 'out of ability';
    }*/
    echo 'Tiếng anh đọc là: ' . $result;
}
?>