<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $currentMonth = date('F');
        
        if ($currentMonth == "December") {
            echo "It's December, here comes the snow.";
        } else {
            echo "It's not the December so you can keep the heating off.";
        }

    
    
    
    ?>
</body>
</html>