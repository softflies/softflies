<?php

/**
 * OutGood - A PHP Framework For Web Applications
 *
 * @package  OutGood
 * @author   Amit Roy <amit@softflies.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// is uri ok?
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';


$app = new Inculcate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);
// start the application
$app->run();