<?php
function countValue(array $numbers, $value)
{
    $count = 0;
    foreach ($numbers as $key => $v) {
        if ($v == $value) {
            $count++;
        }
    }
    echo "Số lần xuất hiện của " . $value . " là : " . $count;
}

countValue([5, 2, 5, 1, 2, 5, 24, 5, 24, 3, 2], 5);
