<?php

class FurnitureProduct extends BaseProduct
{
    private $height;
    private $width;
    private $length;
    /**
     * @var string
     */
    private $attribute;

    public function __construct($incomePostArray)
    {
        parent::__construct($incomePostArray);
        $this->width = $incomePostArray['width'];
        $this->height = $incomePostArray['height'];
        $this->length = $incomePostArray['length'];
        $this->attribute = 'x';
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        $incomePostArray['height'] = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        $incomePostArray['width'] = $width;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        $this->length = $length;
        $incomePostArray['length'] = $length;
    }

    /**
     * @return string. ( specific parameter different for each product type. )
     */
    function getOption()
    {
        return $this->height . $this->attribute . $this->width . $this->attribute . $this->length;
    }
}