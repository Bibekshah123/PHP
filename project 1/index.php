<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "Bibek Shah";
    $hobby = "Playing games and watching movies and animes";
    $address = "Maitidevi, Kathmandu";
    $number = 3645464546;
    $email = "bikkishah57@gmail.com";
    $laptop_model = "Acer nitro 5";
    $parent_number = 6454645345;
    
    echo $name;
    echo "<br>";
    echo $hobby;
    echo "<br>";
    echo $address;
    echo "<br>";
    echo $number;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $laptop_model;
    echo "<br>";
    echo $parent_number;
    echo "<br>";

    $a = 50;
    $b = 5;
    echo "<br>";
    echo $a + $b;
    echo "<br>";
    echo $a - $b;
    echo "<br>";
    echo $a % $b;
    echo "<br>";
    echo $a / $b;
    echo "<br>";
    ?>
     <form action= "Welcome.php" method="POST">
    Name : <input type: "text" name="name"><br>
    Email : <input type: "text" name="email"><br>
    <input type="submit">
    </form>

    <form action = "https://www.google.com/search" method="get">
        <input type= "text" name="q">
        <button>Google Search</button>
    </form>

    <form action = "https://www.linkedin.com/in/bibekshah1234/" method="get">
        <input type= "text" name="q">
        <button>Google Search</button>
    </form>

    <form action = "https://www.youtube.com" method="get">
        <input type= "text" name="q">
        <button>Google Search</button>
    </form>

</body>
</html>