<?php
require_once __DIR__ . "/../models/turn-model.php";
require_once __DIR__ . "/../models/opponent-model.php";


    $opponents = getAllOpponent();
    require_once __DIR__ . '/../views/turn-views.php';



