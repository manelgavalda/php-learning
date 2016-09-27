<?php

//namespace afegit
namespace Manelgavalda;

class Request
{
    public static function uri() {
        return trim($_SERVER['REQUEST_URI'],'/');
        //Aamb laravel.
//        return urldecode(
//        parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
//        );
    }
}