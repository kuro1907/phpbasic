<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input1 = $_POST["input1"];
    $input2 = $_POST["input2"];
    $operator = $_POST["operator"];
    switch ($operator) {
        case "+":
            $result = $input1 + $input2;
            break;
        case "-":
            $result = $input1 - $input2;
            break;
        case "*":
            $result = $input1 * $input2;
            break;
        case "/":
            $result = $input1 / $input2;
            break;
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
    <form action="" method="POST">
        <h3>Calculator</h3>
        <table border="1px solid">
            <tr>
                <th>
                    <p>First Operand:</p>
                </th>
                <td>
                    <input type="number" name="input1">
                </td>
            </tr>
            <tr>
                <th>
                    <p>Operator:</p>
                </th>
                <td>
                    <select name="operator" id="operator">
                        <option value="+">Addition(+)</option>
                        <option value="-">Subtraction(-)</option>
                        <option value="*">Multiplication(X)</option>
                        <option value="/">Divition(/)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>
                    <p>Second Operand:</p>
                </th>
                <td>
                    <input type="number" name="input2">
                </td>
            </tr>
        </table>
        <button type="submit">Calculate</button>
    </form>
    <h2>RESULT:</h2>
    <p><?php
        if (isset($result)) {
            echo $input1 . " " . $operator . " " . $input2 . " = " . $result;
        }
        ?></p>
</body>

</html>