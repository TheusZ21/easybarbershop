<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('Config/Helpers.php');

$routes = require_once('Config/routes.php');

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$url = rtrim($url, '/');

if($url == ''){
    $url = '/easybarber';
}

$routeFound = false;

foreach($routes as $route => $action){

    $route = rtrim($route, '/');

    if($route == $url){

        $controllerName = $action[0];
        $method = $action[1];

        require_once("Controllers/{$controllerName}.php");

        $controllerClass = "Controllers\\{$controllerName}";

        $controller = new $controllerClass();

        $controller->$method();

        $routeFound = true;

        break;
    }
}

if(!$routeFound){

    echo "Página não encontrada!";
}