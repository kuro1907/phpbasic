<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dictionary/index.css">
    <title>Từ Điển Anh - Việt</title>
</head>

<body>
    <h2>Từ Điển Anh - Việt</h2>
    <form method="POST">
        <input type="text" name="search" placeholder="Nhập từ cần tìm" />
        <input type="submit" id="submit" value="Tìm" />
    </form>
    <?php
    $dictionary = array(
        "hello" => "xin chào",
        "how" => "thế nào",
        "book" => "quyển vở",
        "computer" => "máy tính"
    );
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $searchword = $_POST["search"];
        $flag = 0;
        foreach ($dictionary as $word => $description) {
            if ($word == $searchword) {
                echo  $word . "<br/>Nghĩa là : " . $description;
                echo "<br/>";
                $flag = 1;
            }
        }
        if ($flag == 0) {
            echo "Không tìm thấy từ cần tra.";
        }
    }
    ?>
</body>

</html>