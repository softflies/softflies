<?php

use Inculcate\Routing\Request;

define('SOFTFLIES_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Composer registers the auto loader
|--------------------------------------------------------------------------
| 
| Composer, offeres an advantageous, and created classes' loader for
| this application. We simply need to use it! We'll just require it into the content 
| here so we don't gotta to include our classes.
| We are very thankful to the Composer!
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Invoke The Softflies Application
|--------------------------------------------------------------------------
|
| We are ready to run the application.
|
*/

$app = require_once __DIR__.'/../softflies/app.php';
$app->run();