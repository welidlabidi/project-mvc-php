<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../model/model.php" method="post">
        <input type="text" name="num1">
        <select name="oper">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>
        <input type="text" name="num2">
        <button type="submit" name="submit">submit
        </button>
    </form>
</body>

</html>