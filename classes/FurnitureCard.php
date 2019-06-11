<?php


class FurnitureCard extends Card
{
    private $height;
    private $width;
    private $lenght;

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
        $this->height = $height;
        $this->width = $width;
        $this->lenght = $length;
    }



}