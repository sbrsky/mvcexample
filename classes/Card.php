<?php


abstract class Card
{
protected $name;
protected $price;
protected $sku;


 function writeToBase(){

    $sql = "INSERT INTO `sku` (`id`, `name`, `price`, `sku`, `size`, `weight`, `height`,`width`,`length`,`type`) VALUES (NULL, '$this->name', '$this->price', '$this->sku', '$this->size', '$this->weight','$this->h','$this->w','$this->l','$this->type');";

 }

 }