<?php
use App\DB\DBconnection;

require_once 'App/ToolBox/helpFunctions.php';

// Démarrage de la session
session_start();


//Recupere la route en cours
$route = $_SERVER["REQUEST_URI"];
//Recupere la liste des routes disponnibles pour 
$routes = require 'App/Rooter/routes.php';

// Autoloader
// Fonction appelée lorsque l'on essaie d'instancier une classe avec un namespace
spl_autoload_register(function ($className) {
    // On change le sens des \ en /
    $fileName = str_replace('\\', '/', $className);
    // On inclut le fichier
    require "App/$fileName.php";
    
});

if(isset($routes[$route])){
    list($controllerName,$methode) = $routes[$route];
    $controller = new $controllerName;
    $controller->$methode();
}else {
    echo '<h1>Page 404</h1>';
}





