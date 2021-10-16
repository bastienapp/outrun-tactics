<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php require_once(__DIR__ . '/../src/views/_header.php') ?>

   <h1>Titre du jeu</h1>

   <H2>Liste des adversaires :</H2>
   <?php foreach ($opponents as $opponent): ?>
    <section class="opponents">
    <ul class="opponents__ul">
        <li class="opponents__li">
            <div class="opponents__li--card">
                <img class="section__img" src="<?= $opponent['picture'] ?>" alt="<?= $opponent['id'] ?>"/>
                <h3><?= $opponent['name'] ?></h3>
                <p><?= $opponent['description'] ?></p>
            </div>
        </li>
    </ul>
    </section>
    <?php endforeach ?>

    <div class="start-button">
        <input type="submit" value="Start!">
    </div>

   <?php require_once(__DIR__ . '/../src/views/_footer.php') ?>

</body>
</html>