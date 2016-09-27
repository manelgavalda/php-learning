<?php


require 'core/bootstrap.php';
require 'core/Request.php';
require 'core/Router.php';
// Programació orientada a objecte.
// Treballarem amb la request pel anvegador. HTTP -> Request -> Response
//$request new Request;
//$uri = $request->uri();
//Per evitar indicar totes les URLs amb les /.
//trim($_SERVER['REQUEST_URI'],'/');
//require 'index.template.php';
//$tasks = $query->all('todos');
//require 'index.template.php';
//Expresivitat
//$router->direct($uri);

$routes = require 'routes.php';

//$uri= Request::uri();
//$router = new Router;
//$router->define($routes);
//require $router->direct($uri);

require Manelgavalda\Router::load('routes.php')->direct(Manelgavalda\Request::uri());