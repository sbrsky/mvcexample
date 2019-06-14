<?php


class DvdCard extends Card
{
    private $size;

    /**
     * Card constructor.
     * @param $name
     * @param $price
     * @param $sku
     */
    public function __construct($incomePostArray)
    {
        parent::__construct($incomePostArray);
        $this->size = $incomePostArray['size'];

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




}