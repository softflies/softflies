<?php
/**
* This file contains the most important part of the application.
* Where we can set the application name, timezone, providers and etc . . .
*/
return [

    /*
    | To set the debug mode of the application.
    | By default it is TRUE.
   */
   "app_debug" => env("APP_DEBUG",TRUE),
   /*
    | To set the application name.
    | By default it is the framework name.
   */
   "app_name" => env("APP_NAME","SOFTFLIES"),

   /*
    | To set the application url.
    | By default it is the framework name.
   */
   "app_url" => env("APP_URL","http://localhost"),

   /*
    | To set the application locale.
    | By default it is the en.
   */
   "locale" => env("locale","en"),

   /*
    | To set the timezone
    |
   */
    "timezone" => env("timezone","UTC"),


    /*
     | To set the providers
     | To controll the applications
     | To help the application what to do and etc.
    */
     "providers" => [

       // Application Services
      App\Providers\RouteServiceProvider::class,
     ],



];