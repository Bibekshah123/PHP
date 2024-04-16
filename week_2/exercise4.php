<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Multiplication Table</h2>
    <table>
        <thead>
            <tr>
                <th>&nbsp;</th>
                <?php
                // Header row with numbers 1 to 7
                for ($i = 1; $i <= 7; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Generating the multiplication table
            for ($i = 1; $i <= 7; $i++) {
                echo "<tr>";
                echo "<th>$i</th>"; // Left column with row numbers
                for ($j = 1; $j <= 7; $j++) {
                    echo "<td>" . ($i * $j) . "</td>"; // Multiplication result for each cell
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
