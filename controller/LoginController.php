<?php

/**
 * Class Controller_Main
 *
 *  Controller for index page with all products .
 */
Class LoginController extends Controller
{
    private $login;
    private $password;
    private $userrepo;

    function __construct($registry)
    {
        parent::__construct($registry);
        $this->userrepo = new UserRepo();
    }

    //** Start index page */
    public function index()
    {
        if (!empty($_POST)) {
            if ($this->userrepo->checkUser()) {
                $_SESSION['user'] = $_POST['username'];
                header("Location: /");
            }

        }
        $this->page = 'login';
        $records		=	$this->productRepo->selectAll();

        $this->pageData['title'] = "ScandiWeb Test v2.2 Main Page";
        $this->registry['view']->render($this->page, $this->pageData);
    }

    public function register()
    {
        if (!empty($_POST)) {
            if ($_POST['password'] != $_POST['password2']) {
                $this->pageData['wrong'] = "Password should be similar";
            } else {
                $_POST['password'] = md5($_POST['password']);
                $user = new User($_POST);
                $this->userrepo->add($user);
                header("Location: /login");
            }
        }

        $this->page = 'register';
        $this->registry['view']->render($this->page, $this->pageData);
    }

    public function error()
    {
        $this->page = 'logerror';
        $this->registry['view']->render($this->page, $this->pageData);
    }


}