<?php

/**
 * Class Controller_Add
 *
 * Controller for form /add
 * 2 method's :
 * 1) index for displaying page
 * 2) add for adding info to database from for
 *
 */
Class AddController extends Controller {




    function __construct($registry) {

        parent::__construct($registry);

    }
    public function index() {

        $this->page = 'addProd';
        $this->pageData['title'] = "ScandiWeb Add product page";
        $this->registry['view']->render($this->page, $this->pageData);

    }

    public function add()
    {
        $product = CardFactory::build($_POST);
        $this->productRepo->add($product);
    }

    public function DeletePictures() {

        if(isset($_POST['picturs'])) {
           $this->productRepo->deleteProductById($_POST['picturs']);
        }
        exit;

    }

}