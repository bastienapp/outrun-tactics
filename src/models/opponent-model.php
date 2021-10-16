<?php

require_once __DIR__ . '/../config/mysql.php';

function getAllOpponent(): array
{
    $connection = getConnection();
    $query = 'SELECT * FROM opponent';
    $statement = $connection->query($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);
}

function getOpponentById(int $id): object
{
    //Il faudra peut-être faire un intval si l'id est un "int"
    $connection = getConnection();
    $query = 'SELECT * FROM opponent WHERE id=:id';
    $statement = $connection->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_OBJ);

}

function getOpponentsByPosition(string $position): array
{
    //Bastien si tu vois ça, je suis désolé, y'avait bien plus simple mais on s'est perdu en cours de route et il était tard
    $arrayToSplice = str_split($position);
    $indexOfPlayer = array_search("8", $arrayToSplice);
    $arrayToCheck = array_splice($arrayToSplice, $indexOfPlayer, 1);
    $opponentInRightPosition = [];
    $connection = getConnection();
    for ($i = 0; $i < count($arrayToSplice); $i++) {
        $query = 'SELECT * FROM opponent WHERE id=:id';
        $statement = $connection->prepare($query);
        $statement->bindValue(':id', intval($arrayToSplice[$i]), PDO::PARAM_INT);
        $statement->execute();
        $opponentInRightPosition[] = $statement->fetch();
    }
    $newArray = array_chunk($opponentInRightPosition, $indexOfPlayer + 1, true);
    $player = [
        'id' => "8",
        'name' => "Player",
    ];
    array_push($newArray[0], $player);
    foreach ($newArray[1] as $newArrayOsef)
        array_push($newArray[0], $newArrayOsef);
    return $newArray[0];
}

