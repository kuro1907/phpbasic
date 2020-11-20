<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="client_list/index.css">
    <title>Danh sách khách hàng</title>
</head>

<body>
    <table border="0">
        <caption>
            <h1>Danh sách khách hàng</h1>
        </caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
        <?php
        $customer_list = array(
            "1" => array(
                "ten" => "Mai Văn Hoàn",
                "ngaysinh" => "1983-08-20",
                "diachi" => "Hà Nội",
                "anh" => "client_list/images/img1.jpg"
            ),
            "2" => array(
                "ten" => "Nguyễn Văn Nam",
                "ngaysinh" => "1983-08-20",
                "diachi" => "Bắc Giang",
                "anh" => "client_list/images/img2.jpg"
            ),
            "3" => array(
                "ten" => "Nguyễn Thái Hòa",
                "ngaysinh" => "1983-08-21",
                "diachi" => "Nam Định",
                "anh" => "client_list/images/img2.jpg"
            ),
            "4" => array(
                "ten" => "Trần Đăng Khoa",
                "ngaysinh" => "1983-08-22",
                "diachi" => "Hà Tây",
                "anh" => "client_list/images/img2.jpg"
            ),
            "5" => array(
                "ten" => "Nguyễn Đình Thi",
                "ngaysinh" => "1983-08-17",
                "diachi" => "Hà Nội",
                "anh" => "client_list/images/img1.jpg"
            )
        );
        foreach ($customer_list as $key => $values) {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $values['ten'] . "</td>";
            echo "<td>" . $values['ngaysinh'] . "</td>";
            echo "<td>" . $values['diachi'] . "</td>";
            echo "<td><image src ='" . $values['anh'] . "' width = '60px' height ='60px'/></td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>