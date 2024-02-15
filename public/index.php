<?php
require '../helpers.php';


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];



require basePath('Router.php');
$router = new Router;

$routes = require basePath('routes.php');

$router->route($uri, $method);
