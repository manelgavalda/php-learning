<?php

use Manelgavalda\Myframework\core\Request;
use Manelgavalda\Myframework\core\Router;

require __DIR__ .'/../vendor/manelgavalda/php-learning/src/core/bootstrap.php';
require Router::load(__DIR__ .'../vendor/manelgavalda/php-learning/src/controllers/routes.php')->direct(Request::uri());
