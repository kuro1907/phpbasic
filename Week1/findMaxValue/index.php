<?php
$arr = [
    [1, 2, 3],
    [4, 5, 6]
];
function findMaxValue($arr)
{
    $max = $arr[0][0];
    foreach ($arr as $key => $value) {
        foreach ($value as $key2 => $value2) {
            if ($value2 > $max) {
                $max = $value2;
            }
        }
    }
    return $max;
}
echo findMaxValue($arr);
