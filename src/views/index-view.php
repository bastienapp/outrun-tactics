<?php require_once(__DIR__ . '/../models/opponent-model.php');
$opponents = getAllOpponent();

$positionIndex = range(1, 7);
shuffle($positionIndex);
$positionIndex[] = 8;
$positionRandom = implode('', $positionIndex);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outrun Tactics</title>
    <link href="styles/home.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
</head>

<body>
<h1>Outrun Tactics</h1>

<H2>Préparez-vous pour le départ!!</H2>

<img class="map" width=50% src="images/map.png">
<section>
    <H1 class="opponents__title">Participants</H1>
    <div class="opponents">
        <?php foreach ($opponents as $opponent) : ?>
            <div class="opponents__card">
                <h3 class="card-title"><?= $opponent->name ?></h3>
                <img title="<?= $opponent->description ?>" class="section__img" src="<?= $opponent->picture ?>"
                     alt="<?= $opponent->id ?>"/>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="button">
        <a class="start-game" href="/turn?lap=0&position=<?= $positionRandom ?>">Start!</a>
    </div>

</section>
</body>

</html>