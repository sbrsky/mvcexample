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
        $this->sql = "INSERT INTO `sku` (`id`, `name`, `price`, `sku`, `size`,`type`) VALUES (NULL, '$this->name', '$this->price', '$this->sku', '$this->size','$this->type');";

    }



}