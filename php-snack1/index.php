<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$partite = [
    [
    'squadra_casa' => 'Olimpia Milano',
    'squadra_ospite' => 'Cantù',
    'pt_casa' => 55,
    'pt_ospite' => 60,
    ],
    [
    'squadra_casa' => 'Lakers',
    'squadra_ospite' => 'Bisbaccia',
    'pt_casa' => 53,
    'pt_ospite' => 20,
    ],
    [
    'squadra_casa' => 'Caligno Milano',
    'squadra_ospite' => 'Bari',
    'pt_casa' => 10,
    'pt_ospite' => 89,
    ],
];

// for ($i=0; $i < count($partite) ; $i++) { 
//     echo $partite[$i]['squadra_casa'] . ' - ' . $partite[$i]['squadra_ospite']  . ' | ' .  $partite[$i]['pt_casa']  .  $partite[$i]['pt_ospite'];
//     echo '<br>';
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack1</title>
</head>
<body>
    <ul>
        <?php for ($i=0; $i < count($partite) ; $i++) { 
            echo '<li>' . $partite[$i]['squadra_casa'] . ' - ' . $partite[$i]['squadra_ospite']  . ' | ' .  $partite[$i]['pt_casa']  .  $partite[$i]['pt_ospite'] .'</li>';
        }?>
    </ul>
</body>
</html>