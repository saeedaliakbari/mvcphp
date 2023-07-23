<?php

require_once "config/config.php";

// require_once "lib/Database.php";
// require_once "lib/Core.php";
// require_once "lib/Controller.php";


//define auto loading my library
function my_mvc($className)
{
    require_once "lib/" . $className . ".php";
}
//set method my_mvc for auto loading
spl_autoload_register('my_mvc');
