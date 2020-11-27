<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Number</title>
</head>

<body>
    <form method="POST">
        <p>Nhập x :</p>
        <input type="number" name="x">
        <p>Nhập y :</p>
        <input type="number" name="y">
        <button type="submit">Gửi</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = intval($_POST["x"]);
        $y = intval($_POST["y"]);
        try {
            if ($y == 0 && $x == 0 || $y == 0) {
                throw new Exception("Lỗi ngoại lệ : Bị chia bởi 0");
            }
            echo "Tổng " . $x . " + " . $y . " = " . ($x + $y) . "<br>";
            echo "Tổng " . $x . " - " . $y . " = " . ($x - $y) . "<br>";
            echo "Tổng " . $x . " * " . $y . " = " . ($x * $y) . "<br>";
            echo "Tổng " . $x . " / " . $y . " = " . ($x / $y) . "<br>";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } ?>
</body>

</html>