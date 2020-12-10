<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="display_discount.php" method="post">
        <h3>Product Description:</h3><br>
        <textarea id="field" name="field" spellcheck="true" rows="10" cols="50" tabindex="0" placeholder=""></textarea>
        <h3>List Price</h3>
        <input type="number" name="value1">
        <h3>Discount Percent</h3>
        <select name="rate" id="rate">
            <option value="6">Chiết khấu 6%</option>
            <option value="7">Chiết khấu 7%</option>
            <option value="8">Chiết khấu 8%</option>
            <option value="9">Chiết khấu 9%</option>
            <option value="10">Chiết khấu 10%</option>
        </select>
        <button type="submit">Kết quả</button>
    </form>
</body>

</html>