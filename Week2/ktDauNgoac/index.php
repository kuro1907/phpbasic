<?php
$dauNgoac = new splStack();
$str = "(– b + (b^2 – 4*a*c)^(0.5/ 2*a))";
$str_split = str_split($str);
foreach ($str_split as $key => $value) {
    if ($value == "(") {
        $dauNgoac->push($value);
    }

    if ($value == ")") {
        if ($dauNgoac->isEmpty()) {
            $check = false;
            break;
        } else {
            $dauNgoac->pop();
            $check = true;
        }
    }
}

$count = count($dauNgoac);
if ($check == true && $count == 0) {
    echo " Well ";
} else {
    echo " Not Well ";
}
