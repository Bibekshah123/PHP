<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>List of Squares</h2>
    <ul>
    <?php
    for ($i = 1; $i <=12; $i++) {
        $square = $i * $i;
        echo "<li>$i * $i = $square</li>";
    }
    ?>
    </ul>
</body>
</html>