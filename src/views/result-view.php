<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style/result.css">
</head>

<body>
<div class='result-container'>
    <?php if (!empty($_GET)): ?>
        <?php if ($_GET['result'] === 'victory'): ?>
        <?php ?>
            <h1 class='Titre'>
                Victoire
            </h1>
            <div class='container-podium'>
                <div class="first-bloc">2</div>
                <div class="second-bloc">1</div>
                <div class="third-bloc">3</div>
            </div>
            <input type="submit" value='Reset-Game'>
        <?php else: ?>
            <h1 class='Titre'>
                Defaite
            </h1>
            <div class='container-Podium'>
                <img src="image-podium.jpeg" alt="Podium">
                <div class="container-Reset-Game">
                    <input type="submit" value='Reset-Game'>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>
</body>
