<?php

class BookProduct extends BaseProduct
{
    private $color;
    private $attribute;

    public function __construct($incomePostArray)
    {
        parent::__construct($incomePostArray);
        $this->weight = $incomePostArray['weight'];
        $this->attribute = 'Kg';
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        $incomePostArray['weight'] = $weight;
    }

    /**
     * @return string. ( specific parameter different for each product type. )
     */
    function getOption()
    {
        return $this->weight . ' ' . $this->attribute;
    }
}