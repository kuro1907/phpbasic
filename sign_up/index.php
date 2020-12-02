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
                $contact = ["$name", "$email", "$phone"];
            } else {
                throw new Exception("Vui lòng nhập đúng định dạng Email");
            }
        } catch (Exception $e) {
            $err = $e->getMessage();
        }
    }
    ?>
    <p><?= $err ?? "" ?></p>
</body>

</html>