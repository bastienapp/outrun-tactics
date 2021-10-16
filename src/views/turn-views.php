<h2>Classement actuel :</h2>
<section class="section--ranking">
    <?php foreach ($opponents as $opponent) : ?>
    <div class="section__div--ranking"><?= $opponent->name ?></div>
    <?php endforeach; ?>
</section>
<hr>

<section class="section--quote">
    <p class="section__p--quote"><?= $sentence->sentence ?></p>
</section>

<section class="section--quoteAndAnswer">
    <form class="section__form--quoteAndAnswer" action="" method="GET">
        <label class="section__form__label--quoteAndAnswer" for="answer1"><?= $sentence->answer ?>
            <input type="radio" name="answer" id="answer1" value="answer1" class="section__div--quotesAndAnswers" />
        </label>
        <label class="section__form__label--quoteAndAnswer" for="answer2"><?= $sentence->answer ?>
            <input type="radio" name="answer" id="answer2" value="answer2" class="section__div--quotesAndAnswers" />
        </label>
        <label class="section__form__label--quoteAndAnswer" for="answer3"><?= $sentence->answer ?>
            <input type="radio" name="answer" id="answer3" value="answer3" class="section__div--quotesAndAnswers" />
        </label>
        <label class="section__form__label--quoteAndAnswer" for="answer4"><?= $sentence->answer ?>
            <input type="radio" name="answer" id="answer4" value="answer4" class="section__div--quotesAndAnswers" />
        </label>
    </form>
</section>