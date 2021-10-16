<?php

require_once __DIR__ . '/../config/mysql.php';

function getPunchlineByOpponentId($id)
{
    $connection = getConnection();
    $query = 'SELECT * FROM punchline WHERE opponent_id=:id';
    $statement = $connection->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);
}