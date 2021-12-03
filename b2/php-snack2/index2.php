<?php
$guests = [Mario, Gigi, Fabio, Pablo, Eleonora, Marco];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PAGE 2</h1>
    <h2><?php if (in_array($_GET['guest'], $guests)) { echo 'OK';} else { echo 'KO';}  ?></h2>
    <ul>
        <?php foreach ($guests as $i => $guest_name) :?>
            <li><?= $guest_name; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>