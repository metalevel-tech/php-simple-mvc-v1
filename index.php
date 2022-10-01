<?php
/**
 * Auto load classes from "classes/" and "controllers/"
 */
spl_autoload_register(function ($class_name) {
    if (file_exists("classes/" . $class_name . ".php")) {
        require_once("classes/" . $class_name . ".php");
    } elseif ("controllers/" . $class_name . ".php") {
        require_once("controllers/" . $class_name . ".php");
    }
});

/**
 * The page Header, Content and Footer are loaded via
 * Routes.php > class Controller::CreateView("...")
 */
require_once("Routes.php");
?>
