<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
    $paragraph= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum possimus autem esse assumenda. Ratione, porro. Itaque, cumque voluptas odit quod tempora provident ipsam? Tenetur labore reprehenderit optio illum sunt aliquid officiis, quaerat ratione omnis et libero quam, doloremque reiciendis voluptas accusantium dolorem commodi fugiat. Quasi a dolorem eaque? Assumenda cumque facere atque unde sequi corporis officiis quasi autem est accusamus ipsum, odit consequuntur fuga perspiciatis doloribus explicabo tempora minima harum fugit omnis placeat eligendi. Dignissimos quos quidem illo consectetur quam veniam numquam recusandae ullam minima deleniti in mollitia qui iure, error quibusdam id aliquid alias possimus, nostrum voluptatibus exercitationem eos?";

    $splitted_p = explode('.' ,$paragraph);
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
    <h1>Original paragraph</h1>
    <p><?php echo $paragraph ?></p>
    <h2>Splitted paragraph</h2>

        <?php
        for ($i=0; $i < count($splitted_p); $i++) { ?>
            <p><?php echo $splitted_p[$i]; ?></p>
        <?php }; ?>

</body>
</html>