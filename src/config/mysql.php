<?php

require_once __DIR__ . '/../../env_moi.php';

function getConnection(): PDO
{
    return new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
}

