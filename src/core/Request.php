<?php

//namespace afegit
namespace Manelgavalda\Myframework\core;

class Request
{
    public static function uri() {
        return trim($_SERVER['REQUEST_URI'],'/');
        //Amb laravel.
//        return urldecode(
//        parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
//        );
    }
}