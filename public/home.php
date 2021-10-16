<?php require_once('../src/models/opponent-model.php');
$opponents = getAllOpponent();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu AAA</title>
    <link href="./style/home.css" rel="stylesheet">
</head>

<body>
    <?php require_once(__DIR__ . '/../src/views/_header.php'); ?>


    <H1>Liste des adversaires :</H1>
    <section>
        <div class="opponents">
            <?php foreach ($opponents as $opponent) : ?>
                <div class="opponents__card">
                    <img class="section__img" src="<?= $opponent->picture ?>" alt="<?= $opponent->id ?>" />
                    <h3><?= $opponent->name ?></h3>
                    <p><?= $opponent->description ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <div class="start-button">
        <input type="submit" value="Start!">
    </div>

    <?php require_once(__DIR__ . '/../src/views/_footer.php') ?>

</body>

</html>