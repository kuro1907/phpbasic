<?php

$string = "able was I ere I saw elba";
$split_str = str_split($string);
$str_1 = new SplStack();

$str_2 = new SplQueue();


foreach ($split_str as $key => $value) {
    $str_1->push($value);
    $str_2->enqueue($value);
}

// echo "<pre>";
// print_r($str_1);
// print_r($str_2);

$check = [];

for ($i = 0; $i < count($str_1); $i++) {
    if ($str_1[$i] == $str_2[$i]) {
        $check[] = true;
    } else {
        $check[] = false;
    }
}
// echo "<pre>";
// print_r($check);
$result = "Chuỗi đối xứng";
foreach ($check as $k => $v) {
    if ($v == false) {
        $result = "Chuỗi không đối xứng";
    }
}
echo $result;
