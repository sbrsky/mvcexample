<?php

abstract class BaseProduct
{
    protected $id;
    protected $name;
    protected $price;
    protected $sku;
    protected $sql;
    protected $type;
    protected $alldata; //** Array with all vars  */

    /**
     * Card constructor.
     * @param $incomePostArray (Array, from _POST)
     */
    public function __construct($incomePostArray)
    {
        $this->alldata = $incomePostArray;
        $this->name = $incomePostArray['name'];
        $this->price = $incomePostArray['price'];
        $this->sku = $incomePostArray['sku'];
        $this->type = $incomePostArray['type'];
    }

    /**
     * @return string. ( specific parameter different for each product type. )
     */
    abstract function getOption();

    public function getAlldata()
    {
        return $this->alldata;
    }

    public function setAlldata($alldata)
    {
        $this->alldata = $alldata;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSql()
    {
        return $this->sql;
    }

    public function setSql($sql)
    {
        $this->sql = $sql;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

}