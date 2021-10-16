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
    <link href="./styles/home.css" rel="stylesheet">
</head>

<body>
    <?php require_once(__DIR__ . '/../src/views/_header.php'); ?>


    <H1>Préparez vous pour le départ!!</H1>
    <!-- <div class="joueur__card">
        <h3> Choix du personnage </h3>
        <a href="../src/views/turn.php"> <img class="joueur__img" title="Si on me double, je m'énerve! Si je perd, je m'énerve! Donc laissez moi passer!!" src="./images/joueur/1.jpeg" /> </a>
        <a href="../src/views/turn.php"> <img class="joueur__img" title="Ne tenez pas de me passer devant, sous peine de vous prendre un coup de sabre..." src="./images/joueur/5.jpeg" /> </a>
        <a href="../src/views/turn.php"> <img class="joueur__img" title="Regardez mes muscles, vous n'avez aucunes chances contre moi" src="./images/joueur/2.jpeg" /> </a>
        <a href="../src/views/turn.php"> <img class="joueur__img" title="Yo! Prêt pour la bataille?" src="./images/joueur/3.jpeg" /> </a>
        <a href="../src/views/turn.php"> <img class="joueur__img" title="Je vais vous tuer du regard si vous ne me laissez pas gagner!" src="./images/joueur/4.jpeg" /> </a>
        <a href="../src/views/turn.php"> <img class="joueur__img" title="Tranquille!! Je prend une petite pause avant de vous mettre une raclée" src="./images/joueur/6.jpeg" /> </a>
    </div> -->
    <img class="map" width=50% src="./images/map.png">
    <section>
        <div class="opponents">
        <H1 class = "opponents__title">Concurents :</H1>
            <?php foreach ($opponents as $opponent) : ?>
                <div class="opponents__card">
                    <h3><?= $opponent->name ?></h3>
                    <img title="<?= $opponent->description ?>" class="section__img" src="<?= $opponent->picture ?>" alt="<?= $opponent->id ?>" />
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <div class="start">
        <a class= bouton href="/turn?lap=0&position=12345678">Start!</a> 
    </div>
    <?php require_once(__DIR__ . '/../src/views/_footer.php') ?>
</body>

</html>