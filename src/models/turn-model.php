<?php
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// recupere query de l'adresse
$urlQuery = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
$informationsTurn = explode("&", $urlQuery);




// Collect informations URL : 

function getOpponentId(array $informationsTurn): string
{
    return $informationsTurn[0];
}

function getLap(array $informationsTurn): string 
{
    return $informationsTurn[1];
}


//recupere numero du lap
// tant que lap != 16
    //recupere l'opposant

    //affiche la sentence
    $sentence = function getSentence();

    //affiche les 4 possibilité
    //submit
    //incremente lap 