<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

//Name check
$name_len = strlen($name);
if ($name_len > 3) {
    echo 'Your name is LONGER than 3 characters. Noice.';
    echo '<br>';
} else {
    echo 'Your name is SHORTER than 3 characters. What a short name.';
    echo '<br>';

};


//Mail Check
$split_mail = str_split($mail);
if (in_array('.', $split_mail) && in_array('@', $split_mail)) {
    echo 'The mail you typed is valid';
    echo '<br>';
} else {
    echo 'The mail you typed is NOT valid';
    echo '<br>';
};

//Age check
if (is_numeric($age)){
    echo 'Age is a number.';
    echo '<br>';
} else {
    echo 'Age is NOT a number';
    echo '<br>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 2</title>
</head>
<body>
    
</body>
</html>