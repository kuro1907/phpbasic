<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <form method="post">
        <table>
            <tr>
                <th>Tên người dùng</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <td><input type="number" name="phone"></td>
            </tr>
        </table>
        <button type="submit">Đăng ký</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $contact = [];
        try {
            if ($name == "") {
                throw new Exception("Vui lòng nhập dữ liệu");
            } else if ($phone == "") {
                throw new Exception("Vui lòng nhập dữ liệu");
            } else if ($email == "") {
                throw new Exception("Vui lòng nhập dữ liệu");
            } else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                saveDataJSON('user.json', $name, $email, $phone);
            } else {
                throw new Exception("Vui lòng nhập đúng định dạng Email");
            }
        } catch (Exception $e) {
            $err = $e->getMessage();
        }
    }
    ?>
    <p><?= $err ?? "" ?></p>
    <?php

    function saveDataJSON($filename, $name, $email, $phone)
    {

        $contact = [
            'name' => $name,
            'email' => $email,
            'tel' => $phone,
        ];
        $arr_data = loadRegistrations('user.json'); // []

        // đẩy mảng contact vào $array_data
        $arr_data[] = $contact;
        // chuyển mảng dữ liệu > json
        $json_contact = json_encode($arr_data);
        // đưa vào file json
        file_put_contents("user.json", $json_contact);
        echo "<pre>";
        print_r($json_contact);
        echo "</br>";
        echo "</pre>";

        echo "Save succes!!";
    }
    function loadRegistrations($filename)
    {
        $jsondata = file_get_contents($filename); // lấy dữ liệu từ file json ra
        $arr_data = json_decode($jsondata, true); // chuyển json > mảng dữ liệu
        return $arr_data;
    }

    ?>
</body>

</html>