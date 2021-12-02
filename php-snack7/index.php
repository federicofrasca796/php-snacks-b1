<!-- Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
$students = [
    [
        'name' => 'Michele',
        'lastname' => 'Papagni',
        'grades' => [29, 25, 19, 24, 25, 30, 20, 20], 
    ],
    [
        'name' => 'Fabio',
        'lastname' => 'Forghieri',
        'grades' => [24, 24, 29, 30, 26, 30, 28, 26], 
    ],
    [
        'name' => 'Roberto',
        'lastname' => 'Marazzini',
        'grades' => [23, 25, 29, 24, 25, 23, 21, 23], 
    ],
    [
        'name' => 'Federico',
        'lastname' => 'Pellegrini',
        'grades' => [28, 25, 19, 22, 22, 30, 20, 19], 
    ],
];

var_dump($students[0]['grades']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 7</title>
</head>
<body>
    <h1>Classe 69:</h1>
    <?php for ($i=0; $i < count($students) ; $i++) { ?>
        <h3><?php echo $students[$i]['name'].' '.$students[$i]['lastname']?></h3>
        <p>Media voti <strong><?php echo round(array_sum($students[$i]['grades']) / count($students[$i]['grades']), 2)?></strong></p>
        <br>
    <?php }; ?>
</body>
</html>