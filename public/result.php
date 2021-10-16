
<body>
    <div class='result-container'>
<?php if (!empty($_GET)): ?>
    <?php if ($_GET['result'] === 'victory'): ?>
        <h1 classe='Titre'>
            Victoire
        </h1>
        <div class='container-Podium'>
            <img src="image-podium.jpeg" alt="Podium">
            <div classe="container-Reset-Game">
                <input type="submit" value='Reset-Game'>
            </div>
        </div>
            <?php else: ?>
                <h1 classe='Titre'>
            Defaite
        </h1>
        <div class='container-Podium'>
            <img src="image-podium.jpeg" alt="Podium">
            <div classe="container-Reset-Game">
                <input type="submit" value='Reset-Game'>
            </div>
        </div>

    <?php endif; ?>    
<?php endif; ?>   
    </div>
</body>
