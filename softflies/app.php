<?php
/*
|--------------------------------------------------------------------------
| Create The Instance of The Application
|--------------------------------------------------------------------------
|
| We create the new softflies instance of the application..
| Instance is the most important thing of the softflies application.
|
*/

$app = new Inculcate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);


/*
|--------------------------------------------------------------------------
| Return The Instance of The Application
|--------------------------------------------------------------------------
|
| We return the instance of the softflies application.
| Returning Instance of the application to be getting the application ready.
|
*/

return $app;