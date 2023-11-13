<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="calcul.php" method="post">

        <input type="text" name="num1" id="" required>
        <input type="text" name="num2" id="" required>

        <select name="operation" id="">
            <option value="addition">+</option>
            <option value="soustraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
    <input type="submit" value="calculer" onclick="calculer">
    </form>
     
</body>

</html>