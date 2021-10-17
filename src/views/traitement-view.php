<?php

/**
 * traite la réponse du formulaire et redirige vers turn si game n'est pas finie ou vers
 */


$lap = intval($_GET['lap']);
$position = $_GET['position'];
$answer = $_GET['answer'];

$finalLap = 16;

if ($answer === 'answer1') {
     $indexOfEight = strrpos($position, "8");
     $value = $position[$indexOfEight - 1];
     $position[$indexOfEight - 1] = "8";
     $position[$indexOfEight] = $value;

     if (($position[0] == "8") || ($lap >= $finalLap)) {
          header("Location: /result?lap=" . $lap . "&position=" . $position);
          die();
     } else {
          header("Location: /turn?lap=" . $lap . "&position=" . $position);
          die();
     }
     die();
} elseif ($answer != 'answer1') {
     if ($lap >= $finalLap) {
          header("Location: /result?lap=" . $lap . "&position=" . $position);
          die();
     }
     header("Location: /turn?lap=" . $lap . "&position=" . $position);
     die();
}
