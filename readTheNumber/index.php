<?php
function readTheNumber($number)
{
    $arr = ["không", "một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín"];
    return $arr[$number];
}

function countTheNumber($number)
{
    $str = str_split($number);
    $result = "";
    $count = count($str);
    switch ($count) {
        case 1:
            echo readTheNumber($number);
            break;
        case 2:
            $hangchuc = $str[0];
            if ($hangchuc > 1) {
                $result  .= readTheNumber($hangchuc) . " mươi ";
            }
            if ($hangchuc == 1) {
                $result  .=  "mười";
            }
            if ($hangchuc == 0) {
                $result  .= "";
            }
            $hangdonvi = $str[1];
            $result     .= readTheNumber($hangdonvi);
            break;
        case 3:
            $hangtram = $str[0];
            if ($hangtram > 0) {
                $result     .= readTheNumber($hangtram) . ' trăm ';
            }
            if ($hangtram == 0) {
                $result .= "";
            }
            $hangchuc = $str[1];
            if ($hangchuc > 1) {
                $result  .= readTheNumber($hangchuc) . " mươi ";
            }
            if ($hangchuc == 1) {
                $result  .=  " mười ";
            }
            if ($hangchuc == 0) {
                $result  .= " lẻ ";
            }
            $hangdonvi = $str[2];
            $result     .= readTheNumber($hangdonvi);
            break;
        default:
            $result = "Out of ability";
            break;
    }
    return $result;
}

// echo countTheNumber(153);
// echo countTheNumber(103);
echo countTheNumber('053');
