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
        $this->sql = "INSERT INTO `sku` (`id`, `name`, `price`, `sku`,`height`,`width`,`length`,`type`) VALUES (NULL, '$this->name', '$this->price', '$this->sku', '$this->height','$this->width','$this->length','$this->type');";

    }



}