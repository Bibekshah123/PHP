<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Substitution</title>
</head>
<body>
    <header>
        <h1>Welcome to My PHP Variable Substitution Page</h1>
    </header>
    
    <main>
        <section>
            <h2>Variable Substitution</h2>
            <p>This is a demonstration of substituting variables into a statement.</p>

            <?php
                // Define variables
                $cityName = "Birmingham";
                $cityType = "City";

                // Echo the statement with variable substitution
                echo "<p>The $cityName $cityType</p>";

                // Change variable values
                $cityName = "London";
                $cityType = "Capital";

                // Echo the statement again with new variable values
                echo "<p>The $cityName $cityType</p>";
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Website Name. All Rights Reserved.</p>
    </footer>
</body>
</html>
