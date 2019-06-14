<?php


class FurnitureCard extends Card
{
    private $height;
    private $width;
    private $length;

    /**
     * Card constructor.
     * @param $name
     * @param $price
     * @param $sku
     */
    public function __construct($incomePostArray)
    {
        parent::__construct($incomePostArray);
        $this->width = $incomePostArray['width'];
        $this->height = $incomePostArray['height'];
        $this->length = $incomePostArray['length'];

    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
        $incomePostArray['height'] = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
        $incomePostArray['width'] = $width;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->length = $length;
        $incomePostArray['length'] = $length;
    }



}