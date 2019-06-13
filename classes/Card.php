<?php


abstract class Card
{
    protected $id;
    protected $name;
    protected $price;
    protected $sku;
    protected $sql;
    protected $type;
    protected $alldata;

    /**
     * Card constructor.
     * @param $incomePostArray
     */
    public function __construct($incomePostArray)
    {
        $this->alldata = $incomePostArray;
        $this->name = $incomePostArray['name'];
        $this->price = $incomePostArray['price'];
        $this->sku = $incomePostArray['sku'];
        $this->type = $incomePostArray['type'];
    }


    function writeToBase(){

        $base = new Model();
        $base->baseUpdate($this->sql);
    }

    /**
     * @return mixed
     */
    public function getAlldata()
    {
        return $this->alldata;
    }

    /**
     * @param mixed $alldata
     */
    public function setAlldata($alldata)
    {
        $this->alldata = $alldata;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getSql()
    {
        return $this->sql;
    }

    /**
     * @param mixed $sql
     */
    public function setSql($sql)
    {
        $this->sql = $sql;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

}