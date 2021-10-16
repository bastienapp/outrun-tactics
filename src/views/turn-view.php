<?php 
require_once __DIR__ . '/../models/opponent-model.php';
require_once __DIR__ . '/../models/punchline-model.php';
$opponents = getAllOpponent();
$ranking = $_GET['position'];
$arrayRankings = str_split($ranking);
$playerPos = strpos($ranking, "8");
$opponentPos = $playerPos - 1;
$sentencesOfAnOpponent = getRandomPunchlineByOpponentId($ranking[$opponentPos]);
var_dump($sentencesOfAnOpponent);
?>

<link rel="stylesheet" href="styles/turn-view.css">
<main>


<h2>Classement actuel :</h2>
<section class="section--ranking">
    <?php foreach ($arrayRankings as $rank) : ?>
    <div class="section__div--ranking"><?= $opponents[$rank-1]->name ?></div>
    <?php endforeach; ?>
</section>
<hr>

<section class="section--quote">
    <p class="section__p--quote"><?= $sentencesOfAnOpponent->sentence ?></p>
</section>

<section class="section--quoteAndAnswer">
    <form class="section__form--quoteAndAnswer" action="/traitement?lap=<?= $lap ?>&position=<?= $ranking ?>&answer= <?= $_GET['answer'] ?>" method="GET">
        <label class="section__form__label--quoteAndAnswer" for="answer1"><?= $sentencesOfAnOpponent->answer_1 ?>
            <input type="radio" name="answer" id="answer1" value="answer1" class="section__div--quotesAndAnswers" />
        </label>
        <label class="section__form__label--quoteAndAnswer" for="answer2"><?= $sentencesOfAnOpponent->answer_2 ?>
            <input type="radio" name="answer" id="answer2" value="answer2" class="section__div--quotesAndAnswers" />
        </label>
        <label class="section__form__label--quoteAndAnswer" for="answer3"><?= $sentencesOfAnOpponent->answer_3 ?>
            <input type="radio" name="answer" id="answer3" value="answer3" class="section__div--quotesAndAnswers" />
        </label>
        <label class="section__form__label--quoteAndAnswer" for="answer4"><?= $sentencesOfAnOpponent->answer_4 ?>
            <input type="radio" name="answer" id="answer4" value="answer4" class="section__div--quotesAndAnswers" />
        </label>
        <input class="section__form__label--submit" type="submit" value="Valider">
    </form>
</section>

</main>