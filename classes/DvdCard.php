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
    public function __construct($name, $price, $sku,$weight,$size,$height,$width,$length)
    {
        $this->name = $name;
        $this->price = $price;
        $this->sku = $sku;
        $this->size = $size;
    }



}