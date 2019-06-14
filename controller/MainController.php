<?php

/**
 * Class Controller_Main
 *
 *  Controller for index page with all products .
 */
Class MainController extends Controller
{
    function __construct($registry)
    {
        parent::__construct($registry);
    }

    //** Start index page */
    public function index()
    {
        $this->page = 'main';
        $records		=	$this->productRepo->selectAll();
        $products = array();

        foreach ($records as $value) {
            $product = ProductFactory::build($value);
            $id = $value['id'];
            $product->setId($id);
            array_push($products,$product);
        }

        $this->pageData['title'] = "ScandiWeb Test v2.2 Main Page";
        $this->pageData['products'] = $products;
        $this->registry['view']->render($this->page, $this->pageData);
    }
}