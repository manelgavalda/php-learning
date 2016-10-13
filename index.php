<?php
/*

require 'src/core/bootstrap.php';
require 'src/core/Request.php';
require 'src/core/Router.php';
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

require Manelgavalda\myframework\Router::load('routes.php')->direct(Manelgavalda\myframework\Request::uri());
*/
$url = 'http://username:password@hostname:9090/path?arg=value#anchor';



var_dump(parse_url($url));

var_dump(parse_url($url, PHP_URL_SCHEME));

var_dump(parse_url($url, PHP_URL_USER));

var_dump(parse_url($url, PHP_URL_PASS));

var_dump(parse_url($url, PHP_URL_HOST));

var_dump(parse_url($url, PHP_URL_PORT));

var_dump(parse_url($url, PHP_URL_PATH));

var_dump(parse_url($url, PHP_URL_QUERY));

var_dump(parse_url($url, PHP_URL_FRAGMENT));

?>