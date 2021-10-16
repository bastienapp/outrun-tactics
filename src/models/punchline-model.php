<?php

require_once __DIR__ . '/../config/mysql.php';

function getPunchlineByOpponentId(int $id)
{
    $connection = getConnection();
    $query = 'SELECT * FROM punchline WHERE opponent_id=:id';
    $statement = $connection->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);
}

function getRandomPunchlineByOpponentId(int $id)
{
    $connection = getConnection();
    $query = 'SELECT * FROM punchline WHERE opponent_id=:id';
    $statement = $connection->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $questions = $statement->fetchAll(PDO::FETCH_OBJ);
    return array_rand($questions);

}