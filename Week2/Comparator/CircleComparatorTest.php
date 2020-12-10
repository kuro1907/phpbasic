<?php

include "CircleComparator.php";

$circleOne = new ComparableCircle('circleOne', 1);
$circleTwo = new ComparableCircle('circleTwo', 2);
$circleThree = new ComparableCircle('circleThree', 4);

$test = $circleOne->compareTo($circleThree);
echo ('Comparable: <br>');
echo $test;
