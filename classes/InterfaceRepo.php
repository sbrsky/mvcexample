<?php


interface InterfaceRepo
{
    public function add(Card $product);
    public function selectAll();
    function pdoPrepareSql($permitted, &$values, $source = array());

}