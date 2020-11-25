<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST["field"];
    $price = $_POST["value1"];
    $rate = $_POST["rate"];
    if ($price == '') {
        echo "Dữ liệu không được để trống.</br> Vui lòng nhập lại dữ liệu</br>";
        echo "<a href ='index.php'>Trở lại</a>";
    } else {
        $result = $price * $rate * 0.1;
        echo "<h3>Description :</h3>";
        echo $description;
        echo "<h3>Result :</h3>";
        if (isset($result)) {
            echo $result;
        }
    }
}
