<?php

require_once __DIR__ . '/../../env.php';

function getConnection(): PDO
{
    return new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8');
}
