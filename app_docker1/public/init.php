<?php
spl_autoload_register(function($class){
    require $class. '.php';
});
   //include "Database.php";
   define("DB_HOST", "db");
   define("DB_NAME", "laravel");
   define("DB_USER", "root");
   define("DB_PASS", "root");
   define("BASE_URL", "http://localhost:80/");

   $validate = new Validate;
   $userObj = new User;

