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
$arrayIndex = [1,2,3,4]; 
$randomIndex = shuffle($arrayIndex);
var_dump($arrayIndex);
?>

<link rel="stylesheet" href="styles/turn-view.css">
<main>


<h2>Classement actuel :</h2>
<section class="section--ranking">
    <?php foreach ($lapRanking as $rank) : ?>
    <div class="section__div--ranking"><?= $rank['name'] ?></div>
    <?php endforeach; ?>
</section>
<hr>

<section class="section--quote">
    <p class="section__p--quote"><?= $sentencesOfAnOpponent->sentence ?></p>
</section>
<?php var_dump($sentencesOfAnOpponent) ?>
<section class="section--quoteAndAnswer">
    <form class="section__form--quoteAndAnswer" action="/traitement" method="GET">
    <?php foreach ($arrayIndex as $index) : ?>
        <?php $property = 'answer_' . $index; ?>
        <label class="section__form__label--quoteAndAnswer" for="answer<?= $index ?>" ><?= $sentencesOfAnOpponent->$property ?>
            <input type="radio" name="answer" id="answer<?= $index ?>" value="answer<?= $index ?>" class="section__div--quotesAndAnswers" />
        </label>
        <?php endforeach ?>
        <input type="hidden" value="<? $ranking ?>" name="position" />
        <input type="hidden" value="<? $lap ?>" name="lap" />
        <input class="section__form__label--submit" type="submit" value="Valider">
    </form>
</section>

</main>