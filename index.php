<?php


require 'core/bootstrap.php';

require 'routes.php';

//Per evitar indicar totes les URLs amb les /.
$uri = trim($_SERVER['REQUEST_URI'],'/');

if (array_key_exists($uri,$routes)) {
    require $routes[$uri];
} else {
        throw new Exception("No s'ha trobat la ruta");
}




/*
require 'index.template.php';
$tasks = $query->all('todos');
require 'index.template.php';
*/