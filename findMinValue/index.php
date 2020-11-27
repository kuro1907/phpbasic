<?php
$arr = [53, 15, 7, 56, 25, 14, 8, 4, 73, 5];
function findMinValue($arr)
{
    $min = $arr[0];
    foreach ($arr as $key => $value) {
        if ($value < $min) {
            $min = $value;
            $index = $key;
        }
    }
    echo "Tại vị trí thứ $index có giá trị nhỏ nhất là $min";
}
findMinValue($arr);
