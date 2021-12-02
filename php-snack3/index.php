<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Chiara Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Pablo Valerio Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Pablo Valerio Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Pablo Valerio Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

// var_dump($posts);
// var_dump(array_keys($posts)[0]);
// var_dump($posts[array_keys($posts)[0]][0]['title']);

for ($i=0; $i < count($posts); $i++) {
    // echo array_keys($posts)[$i];
    $dates = array_keys($posts)[$i];
    // var_dump(count($posts[$dates]));
    for ($j=0; $j < count($posts[$dates]) ; $j++) { 
        // var_dump($posts[$dates]);
        // var_dump($posts[$dates][$j]);
        // var_dump($posts[$dates][$j]['author']);
        // var_dump($posts[$dates][$j]['title']);
        // var_dump($posts[$dates][$j]['text']);
    };
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 3</title>
</head>
<body>
    <ul>
        <?php for ($i=0; $i < count($posts); $i++) { 
            $dates = array_keys($posts)[$i];
        ?>
        <li><h1><?php echo array_keys($posts)[$i]; ?></h1></li>
            <ul>
            <?php for ($j=0; $j < count($posts[$dates]) ; $j++) { ?>
                    <li><strong><?php echo $posts[$dates][$j]['title']?></strong></li>
                <ol>
                    <li><?php echo $posts[$dates][$j]['author'] . ' | ' . $posts[$dates][$j]['text']; ?></li>
                </ol>
            <?php }; ?>
            </ul>
            
        <?php }; ?>
    </ul>
</body>
</html>