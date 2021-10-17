<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <link rel="stylesheet" href="styles/result.css">
</head>

<body>
    <?php
        require_once __DIR__ . '/../models/opponent-model.php';
        $position = $_GET['position'];
        $podium = [];
        for ($i = 0; $i < 3; $i++) {
            $podium[] = getOpponentById(intval($position[$i]));        
        }
        $gameOver = strpos(substr($position, 0, 3), "8") === false;
    ?>
    <div class='result-container'>
        <?php if ($gameOver): ?>
        <h1>Game Over</h1>
        <?php else: ?>
        <h1>Bravo, vous êtes sur le podium !</h1>
        <?php endif; ?>
        <div class="podium podium__first">
            <img src="<?= $podium[0]->picture ?>" alt="<?= $podium[0]->picture ?>" />
            <h2>🥇 <?= $podium[0]->name ?></h2>
            <h3><?= $podium[0]->description ?></h3>
        </div>
        <ul class="podium__other">
            <li class="podium podium__second">
                <img src="<?= $podium[1]->picture ?>" alt="<?= $podium[1]->picture ?>" />
                <h3>🥈 <?= $podium[1]->name ?></h3>
            </li>
            <li class="podium podium__third">
                <img src="<?= $podium[2]->picture ?>" alt="<?= $podium[2]->picture ?>" />
                <h3>🥉 <?= $podium[2]->name ?></h3>
            </li>
        </ul>
        <a href="/">Rejouer</a>
    </div>
</body>
