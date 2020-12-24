<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str       = $_POST["phone"];
    $str_ex    = explode(",", $str);
    $vinaphone = [];
    $mobiphone = [];
    $vietel    = [];
    $another   = [];
    foreach ($str_ex as $key => $value) {
        $str_ex[$key] = str_split($value, 3);
    }
    foreach ($str_ex as $k => $val) {
        if (
            $str_ex[$k][0] == "081" ||
            $str_ex[$k][0] == "082" ||
            $str_ex[$k][0] == "083" ||
            $str_ex[$k][0] == "084" ||
            $str_ex[$k][0] == "085"
        ) {
            $impro          = implode(" ", $str_ex[$k]);
            $vinaphone[]    = $impro;
        } else if (
            $str_ex[$k][0] == "070" ||
            $str_ex[$k][0] == "079" ||
            $str_ex[$k][0] == "077" ||
            $str_ex[$k][0] == "076" ||
            $str_ex[$k][0] == "078"
        ) {
            $impro          = implode(" ", $str_ex[$k]);
            $mobiphone[]    = $impro;
        } else if (
            $str_ex[$k][0] == "032" ||
            $str_ex[$k][0] == "033" ||
            $str_ex[$k][0] == "034" ||
            $str_ex[$k][0] == "035" ||
            $str_ex[$k][0] == "036" ||
            $str_ex[$k][0] == "037" ||
            $str_ex[$k][0] == "038" ||
            $str_ex[$k][0] == "039"
        ) {
            $impro          = implode(" ", $str_ex[$k]);
            $vietel[]       = $impro;
        } else {
            $impro          = implode(" ", $str_ex[$k]);
            $another[]      = $impro;
        }
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
    <form action="" method="post">
        <textarea name="phone" id="phone" cols="30" rows="10"></textarea>
        <button type="submit">Gửi</button>
    </form>
    <h3>Danh sách các số Vinaphone (+81)(+82)(+83)(+84)(+85) :</h3>
    <?php
    if (isset($vinaphone)) {
        foreach ($vinaphone as $list_vn => $numbervn) {
            echo "<p>" . $numbervn . "</p>";
        }
    }
    ?>
    <h3>Danh sách các số Mobiphone (+70)(+76)(+77)(+78)(+79) :</h3>
    <?php
    if (isset($mobiphone)) {
        foreach ($mobiphone as $list_mb => $numbermb) {
            echo "<p>" . $numbermb . "</p>";
        }
    }
    ?>
    <h3>Danh sách các số Vietel (+32)(+33)(+34)(+35)(+36)(+37)(+38)(+39) :</h3>
    <?php
    if (isset($vietel)) {
        foreach ($vietel as $list_vt => $numbervt) {
            echo "<p>" . $numbervt . "</p>";
        }
    }
    ?>
    <h3>Danh sách các số khác :</h3>
    <?php
    if (isset($another)) {
        foreach ($another as $other => $numberot) {
            echo "<p>" . $numberot . "</p>";
        }
    }
    ?>
</body>

</html>