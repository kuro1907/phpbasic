<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
</head>

<body>
    <h3>Future Value Calculator</h3>
    <form action="" method="POST">
        <table border="1px">
            <thead>
                <tr>
                    <th>
                        <h4>Inventment Amount</h4>
                    </th>
                    <th>
                        <h4>Yearly Interest Rate</h4>
                    </th>
                    <th>
                        <h4>Number of Years</h4>
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="number" name="value1"></td>
                    <td style="text-align: center;">
                        <select name="rate" id="rate">
                            <option value="6">Lãi suất 6%</option>
                            <option value="7">Lãi suất 7%</option>
                            <option value="8">Lãi suất 8%</option>
                            <option value="9">Lãi suất 9%</option>
                            <option value="10">Lãi suất 10%</option>
                        </select>
                    </td>
                    <td><input type="number" name="year"></td>
                    <td><button type="submit">Tính lãi suất</button></td>
                </tr>
            </tbody>
        </table>
    </form>
    <h2>Result: </h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $value1 = $_POST["value1"];
        $rate = $_POST["rate"];
        $year = $_POST["year"];
        $result = (($value1 + ($value1 * $rate) / 100)) * $year;
    }
    if (isset($result)) {
        echo $result;
    } ?>
</body>

</html>