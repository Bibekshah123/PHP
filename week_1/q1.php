<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <header>
        <h1>Welcome to My Hello World Page</h1>
    </header>
    
    <main>
        <section>
            <h2>Hello World</h2>
            <p>This is a simple demonstration of a PHP page displaying "Hello World".</p>
            <?php
                // PHP code to display "Hello World"
                echo "<p>Hello World</p>";
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Website Name. All Rights Reserved.</p>
    </footer>
</body>
</html>
