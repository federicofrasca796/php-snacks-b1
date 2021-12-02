<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php
    $rnd_array = [];

    for ($i=0; $i < 15; $i++) { 
        array_push($rnd_array, rand(1,99));
    };
    // var_dump($rnd_array[0]);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack4</title>
</head>
<body>
    <ul>
        <?php for ($i=0; $i < count($rnd_array); $i++) { ?>
            <li> <?php echo $rnd_array[$i]; ?></li>
        <?php }; ?>
    </ul>
</body>
</html>