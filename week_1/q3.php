<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operations</title>
</head>
<body>
    <header>
        <h1>Arithmetic Operations</h1>
    </header>
    
    <main>
        <section>
            <h2>Equations</h2>
            <?php
                // Define variables
                $x = 15;
                $y = 7;

                // Addition
                $addition = $x + $y;
                echo "$x + $y = $addition <br>";

                // Subtraction
                $subtraction = $x - $y;
                echo "$x - $y = $subtraction <br>";

                // Multiplication
                $multiplication = $x * $y;
                echo "$x * $y = $multiplication <br>";

                // Division
                $division = $x / $y;
                echo "$x / $y = $division <br>";

                // Modulus
                $modulus = $x % $y;
                echo "$x % $y = $modulus <br>";
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Bibek Shah web. All Rights Reserved.</p>
    </footer>
</body>
</html>
