<?php

class DvdProduct extends BaseProduct
{
    private $size;
    /**
     * @var string
     */
    private $attribute;

    public function __construct($incomePostArray)
    {
        parent::__construct($incomePostArray);
        $this->size = $incomePostArray['size'];
        $this->attribute = 'Mb';
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
        $incomePostArray['size'] = $size;
    }

    /**
     * @return string. ( specific parameter different for each product type. )
     */
    function getOption()
    {
        return $this->size . ' ' . $this->attribute;
    }
}