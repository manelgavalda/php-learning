<?php
require __DIR__ .'/../src/core/bootstrap.php';

use Manelgavalda\Myframework\core\Request;
use Manelgavalda\Myframework\core\Router;

require Router::load('routes.php')->direct(Request::uri());
