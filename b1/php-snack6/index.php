<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];


    // var_dump($db['teachers'][0]['name']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 6</title>
    <style>
        ul,ol{
            padding-left: 0;
        }
        .d-flex{
            display: flex;
        }
        .teachers, .pm{
            margin: 1rem;
            padding:4rem;
            color: white;
        }
        .teachers{
            background-color: #333;
        }
        .pm{
            background-color: green;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="teachers">
            <ol>
                <?php for ($i=0; $i < count($db['teachers']); $i++) { ?>
                    <li><?php echo $db['teachers'][$i]['name'] . ' ' . $db['teachers'][$i]['lastname'] ?></li>
                <?php }; ?>
            </ol>
        </div>

        <div class="pm">
            <ol>
                <?php for ($i=0; $i < count($db['pm']); $i++) { ?>
                    <li><?php echo $db['pm'][$i]['name'] . ' ' . $db['pm'][$i]['lastname'] ?></li>
                <?php }; ?>
            </ol>
        </div>
    </div>

</body>
</html>