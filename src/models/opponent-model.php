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
    var_dump($arrayToSplice);
    $opponentInRightPosition = [];
    $player = [
        'id' => "8",
        'name' => "Player",
    ];
    $connection = getConnection();
    for ($i = 0; $i < count($arrayToSplice); $i++) {
        if (!($arrayToSplice[$i] === "8")) {
            $query = 'SELECT * FROM opponent WHERE id=:id';
            $statement = $connection->prepare($query);
            $statement->bindValue(':id', intval($arrayToSplice[$i]), PDO::PARAM_INT);
            $statement->execute();
            $opponentInRightPosition[] = $statement->fetch();
        } else {
            $opponentInRightPosition[] = $player;
        }
    }
    return $opponentInRightPosition;
}

