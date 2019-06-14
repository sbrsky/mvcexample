<?php


class ProductRepo implements InterfaceRepo
{

    /**
     * @var Model
     */
    private $model;
    protected $nameTable = 'sku';

    public function __construct()
    {
        require_once SITE_PATH . 'model' . DIRSEP . 'Model.php';
        $this->model = new Model();
    }

    public function add(Card $product)
    {

        $permitted = array("name","sku","price","size","weight","width","length","height","type");
        $sql = "INSERT INTO $this->nameTable SET ".$this->pdoPrepareSql($permitted,$values,$product->getAlldata());
        $this->model->insertToBase($sql,$values);
    }

    public function selectAll()
    {
        return $this->model->selectAllFromTable($this->nameTable);
    }

    public function deleteProductById($arr)
    {
        foreach ($arr as $value) {

          $this->model->deleteRecord($value,$this->nameTable);
        }
    }

    function pdoPrepareSql($permitted, &$values, $source = array()) {
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
}