<?php


class UserRepo
{
    private $model;
    protected $nameTable = 'users';

    public function __construct()
    {
        require_once SITE_PATH . 'model' . DIRSEP . 'Model.php';
        $this->model = new Model();
    }

    public function add(User $user)
    {
        $permitted = array("username","password","role");
        $sql = "INSERT INTO $this->nameTable SET ".$this->pdoPrepareSql($permitted,$values,$user->getAlldata());
        $this->model->insertToBase($sql,$values);
    }

    public function pdoPrepareSql($permitted, &$values, $source = array())
    {
        $set = '';
        $values = array();

        if (!$source) $source = &$_POST;
        foreach ($permitted as $field) {
            if (isset($source[$field])) {
                $set.="`".str_replace("`","``",$field)."`". "=:$field, ";
                $values[$field] = $source[$field];
            }
        }
        return substr($set, 0, -2);
    }

    public function checkUser(){
        return $this->model->checkUser();
    }
}