<!-- Formulier POST en GET -->

<?php

/**
 * Created by PhpStorm.
 * User: Loïc
 * Date: 12/04/2017
 * Time: 22:56
 */
class Form
{
    public static function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    public static function get($name, $default = null)
    {
        if (isset($_GET[$name])) {
            return $_GET[$name];
        }

        return $default;
    }

    public static function post($name, $default = null)
    {
        if (isset($_POST[$name])) {
            return $_POST[$name];
        }

        return $default;
    }
}