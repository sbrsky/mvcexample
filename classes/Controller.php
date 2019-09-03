<?php

abstract class Controller
{
    protected $registry;
    protected $pageData = array();
    protected $page = 'main';
    protected $view;
    protected $productRepo;

    function __construct($registry) {
        $this->registry = $registry;
        $this->productRepo = new ProductRepo();
    }
    function logout(){
        session_destroy();
        header("Location: /");
    }
}