<?php

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' === $urlPath) {
    require __DIR__ . '/views/index-view.php';
} elseif ('/turn' === $urlPath ) {
    require __DIR__ . '/views/turn-view.php';
} elseif ('/traitement' === $urlPath) {
    require __DIR__ . '/views/traitement-view.php';
}elseif ('/result' === $urlPath) {
    require __DIR__ . '/views/result-view.php';
} else {
    header('HTTP/1.1 404 Not Found');
}