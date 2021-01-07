<?php
if ($SEVER["REQUEST_MEMOD"] = "POST") {
    if (isset($_POST["number"])) {
        $value = $_POST["number"];
        $rate = $value * 23000;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
</head>

<body>
    <form action="" method="post">
        <h3>Nhập số tiền bạn muốn kiểm tra (USD): </h3>
        <input type="number" name="number">
        <button type="submit">Chuyển đổi</button>
    </form>
    <p>Số tiền sau khi đổi là : <?= $rate ?? "" ?> VND</p>
</body>

</html>