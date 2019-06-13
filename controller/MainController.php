<?php



/**
 * Class Controller_Main
 *
 *  Controller for index page with cards .
 */


Class MainController extends Controller
{
    function __construct($registry)
    {
        parent::__construct($registry);
    }

    // -- Start index page
    public function index()
    {
        $this->page = 'main';
        $records		=	$this->productRepo->selectAll();
        $this->pageData['title'] = "ScandiWeb Test v2.2 Main Page";
        $this->pageData['records'] = $records;
        $this->registry['view']->render($this->page, $this->pageData);
    }

}