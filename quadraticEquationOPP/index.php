<?php
class quadraticEquation
{
    private $a;
    private $b;
    private $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function gettterA()
    {
        return $this->a;
    }

    function gettterB()
    {
        return $this->b;
    }

    function gettterC()
    {
        return $this->c;
    }

    function getDiscriminant()
    {
        $delta = ($this->b * $this->b) - (4 * $this->a * $this->c);
        if ($delta > 0) {
            $result = "Nghiệm 1 của phương trình là : " . (((-1 * $this->b) - sqrt($delta)) / (2 * $this->a)) . "<br>"
                . "Nghiệm 2 của phương trình là : " . (((-1 * $this->b) + sqrt($delta)) / (2 * $this->a));
        } else if ($delta == 0) {
            $result = "Phương trình có 1 nghiệm là : " . ((-1 * $this->b) / (2 * $this->a));
        } else {
            $result = "Phương trinh vô nghiệm";
        }
        return $result;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    if ($a == "") {
        $kq = "Vui lòng không để trống ô dữ liệu";
    } else if ($b == "") {
        $kq = "Vui lòng không để trống ô dữ liệu";
    } else if ($c == "") {
        $kq = "Vui lòng không để trống ô dữ liệu";
    } else {
        $ct = new quadraticEquation($a, $b, $c);
        $kq = $ct->getDiscriminant();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <p>Nhập a:</p>
        <input type="number" name="a">
        <p>Nhập b:</p>
        <input type="number" name="b">
        <p>Nhập c:</p>
        <input type="number" name="c">
        <button type="submit">Tìm nghiệm</button>
    </form>
    <h3>Kết quả: </h3>
    <p><?= $kq ?? "" ?></p>
</body>

</html>