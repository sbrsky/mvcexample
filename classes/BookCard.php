<?php


class BookCard extends Card
{
    private $weight;

    /**
     * Card constructor.
     * @param $incomePostArray
     */
    public function __construct($incomePostArray)
    {
        parent::__construct($incomePostArray);
        $this->weight = $incomePostArray['weight'];
        $this->sql = "INSERT INTO `sku` (`id`, `name`, `price`, `sku`, `weight`,`type`) VALUES (NULL, '$this->name', '$this->price', '$this->sku', '$this->weight','$this->type');";


    }



}