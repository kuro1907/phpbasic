<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speak Number</title>
</head>

<body>
    <h2>Điền số bạn muốn đọc</h2>
    <form action="" method="get">
        <input type="number" name="number">
        <button type="submit">SPEAK</button>
    </form>

    <?php
    function checkAbility($number)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $number = $_GET["number"];
            if ($number < 10 && $number > 0) {
                switch ($number) {
                    case 1:
                        echo "one";
                        break;
                    case 2:
                        echo "two";
                        break;
                    case 3:
                        echo "three";
                        break;
                    case 4:
                        echo "four";
                        break;
                    case 5:
                        echo "five";
                        break;
                    case 6:
                        echo "six";
                        break;
                    case 7:
                        echo "seven";
                        break;
                    case 8:
                        echo "eight";
                        break;
                    case 9:
                        echo "nine";
                        break;
                }
            } else {
                echo "Out of ability";
            }
        }
    }
    ?>
</body>

</html>