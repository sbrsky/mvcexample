<?php


abstract class Controller
{
    protected $registry;
    protected $pageData = array();
    protected $page = 'main';
    /**
     * @var View
     */
    protected $view ;
    /**
     * @var ProductRepo
     */
    protected $productRepo;

    function __construct($registry) {
        $this->registry = $registry;
        $this->productRepo = new ProductRepo();
    }
}