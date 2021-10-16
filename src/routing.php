<?php

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' === $urlPath) {
    require __DIR__ . '/views/index.php';
} elseif ('/turn' === $urlPath && isset($_GET['id'])) {
    require __DIR__ . '/views/turn-views.php';
} elseif ('/result' === $urlPath) {
    require __DIR__ . '/views/result-view.php';
} else {
    header('HTTP/1.1 404 Not Found');
}