<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=/, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     // Using while loop
     echo "Using while loop:<br>";
     $counter = 0;
     while ($counter < 9) {
         echo "abc ";
         $counter++;
     }
     echo "<br><br>";
 
     // Using do while loop
     echo "Using do while loop:<br>";
     $counter = 0;
     do {
         echo "xyz ";
         $counter++;
     } while ($counter < 9);
     echo "<br><br>";
 
     // Using for loop for numbers
     echo "Using for loop for numbers:<br>";
     for ($i = 1; $i <= 9; $i++) {
         echo "$i ";
     }
     echo "<br><br>";
 
     // Using for loop for ordered list
     echo "Using for loop for ordered list:<br>";
     echo "<ol>";
     for ($i = 'A'; $i <= 'F'; $i++) {
         echo "<li>Item $i</li>";
     }
     echo "</ol>";
    ?>
</body>
</html>