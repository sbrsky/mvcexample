<?php

function __autoload($class_name)
{
    $filename = strtolower($class_name) . '.php';
    $file = SITE_PATH . 'classes' . DIRSEP . $filename;
    if (file_exists($file) == false) {
        return false;
    }
    include($file);
}

/* Global Variables */
$registry = new Registry;
$view = new View();
$registry->set('view', $view);

/* include Router */
$router = new Router($registry);
$registry->set('router', $router);
$router->setPath(SITE_PATH . 'controller');

/* Start Router */
$router->delegate();