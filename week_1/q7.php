<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Types</title>
</head>
<body>
    <h1>Testing Variable Types</h1>

    <?php
    // Assign different values to $whatsit and print their types
    $whatsit = "Hello";
    echo "Value is " . gettype($whatsit) . "<br>";

    $whatsit = 3.14;
    echo "Value is " . gettype($whatsit) . "<br>";

    $whatsit = true;
    echo "Value is " . gettype($whatsit) . "<br>";

    $whatsit = 42;
    echo "Value is " . gettype($whatsit) . "<br>";

    $whatsit = NULL;
    echo "Value is " . gettype($whatsit) . "<br>";
    ?>
</body>
</html>
