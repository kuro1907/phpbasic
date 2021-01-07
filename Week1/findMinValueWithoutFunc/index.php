<?php
$value = NULL;
$min = NULL;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value = $_POST["value"];
    if ($value > 0) {
        $size = [];
        while (count($size) < $value) {
            $size[] = rand(-100, 100);
        }
        $min = $size[0];
        foreach ($size as $key => $value) {
            if ($value < $min) {
                $min = $value;
            }
        }
        $result = implode(",", $size);
    } else {
        $result = "Vui lòng nhập size > 0";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find MinValue</title>
</head>

<body>
    <form action="" method="post">
        <h4>Nhập size phần tử muốn tạo :</h4>
        <input type="number" name="value">
        <button type="submit">Tìm số nhỏ nhất</button>
    </form>
    <table border="1px solid" style="text-align: center; margin-top:50px;">
        <tr>
            <th>
                <h4>Mảng size gồm các phần tử </h4>
            </th>
            <td>
                <p><?= $result ?? "" ?></p>

            </td>
        </tr>
        <tr>
            <th>
                <h4>Phần tử nhỏ nhất là </h4>
            </th>
            <td>
                <p><?= $min ?></p>
            </td>

        </tr>
    </table>
</body>

</html>