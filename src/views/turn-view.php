<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Outrun Tactics</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <link rel="stylesheet" href="styles/result.css">
</head>
<body>
<?php
require_once __DIR__ . '/../models/opponent-model.php';
require_once __DIR__ . '/../models/punchline-model.php';
$lap = intval($_GET['lap']) + 1;
$opponents = getAllOpponent();
$ranking = $_GET['position'];
$arrayRankings = str_split($ranking);
$playerPos = strpos($ranking, "8");
$opponentPos = $playerPos - 1;
$sentencesOfAnOpponent = getRandomPunchlineByOpponentId($ranking[$opponentPos]);
$lapRanking = getOpponentsByPosition($ranking);
$arrayIndex = [1, 2, 3, 4];
$randomIndex = shuffle($arrayIndex);
?>

<link rel="stylesheet" href="styles/turn-view.css">
<main>


     <h2>Classement actuel :</h2>
     <section class="section--ranking">
          <ul>
               <?php $i = 0; ?>
               <?php foreach ($lapRanking as $rank) : ?>
               <li class="section__div--ranking">
                    <img src="<?= $rank['picture'] ?>" />
                    <p><?= ++$i; ?></p>
               </li>
               <?php endforeach; ?>
          </ul>
     </section>
     <hr>

     <section class="section--quote">
          <p class="section__p--quote"><?= $sentencesOfAnOpponent->sentence ?></p>
     </section>
     <section class="section--quoteAndAnswer">
          <form class="section__form--quoteAndAnswer" action="/traitement" method="GET">
               <?php foreach ($arrayIndex as $index) : ?>
                    <?php $property = 'answer_' . $index; ?>
                    <label class="section__form__label--quoteAndAnswer" for="answer<?= $index ?>"><?= $sentencesOfAnOpponent->$property ?>
                         <input type="radio" name="answer" id="answer<?= $index ?>" value="answer<?= $index ?>" class="section__div--quotesAndAnswers" />
                    </label>
               <?php endforeach ?>
               <input type="hidden" value="<?= $ranking ?>" name="position" />
               <input type="hidden" value="<?= $lap ?>" name="lap" />
               <input class="section__form__label--submit" type="submit" value="Valider">
          </form>
     </section>

</main>
</body>
</html>