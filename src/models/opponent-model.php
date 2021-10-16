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