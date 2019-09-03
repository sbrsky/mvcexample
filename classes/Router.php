<?php

Class Router
{
    private $registry;
    private $path;

    /**
     * Initialize Registry
     *
     * @param  $registry
     */
    function __construct($registry)
    {
        $this->registry = $registry;
    }

    /**
     * Set path of Controller
     * - for localhost projects
     * param  $path
     *
     */
    function setPath($path)
    {
        $path = trim($path, '/\\');
        $path .= DIRSEP;
        if (!is_dir($path)) {
            throw new Exception ('Invalid controller path: `' . $path . '`');
        }
        $this->path = $path;
    }

    /**
     * Set Controller / Action
     *
     * action = Controllers method
     * Start controller's action
     */
    public function delegate()
    {
        $controller = 'main'; // Default controller
        $action     = 'index'; // Default action
        $route = explode("/", $_SERVER['REQUEST_URI']);

        if (!empty($_SESSION['user'])) {
            //** Define Controller\action
            if ($route[1] != '') {
                $controller = ucfirst($route[1]);
            }
            if (isset($route[2]) && $route[2] != '') {
                $action = $route[2];
            }

            $file = $this->path . ucfirst($controller) . "Controller" . '.php'; //** Set name of Controller for including
            include ($file);

            //** Creating controller bean
            $class =  $controller . 'Controller';
            $controller = new $class($this->registry);

            //** Start controller's action
            $controller->$action();
        } else {
            $file = $this->path . "Login" . "Controller" . '.php'; //** Set name of Controller for including
            include ($file);
            $controller = new LoginController($this->registry);
            if (isset($route[2]) && $route[2] != '') {
                $action = $route[2];
            }
            //** Start controller's action
            $controller->$action();
        }
    }
}
