<?php

interface InterfaceRepo
{
    public function add(BaseProduct $product);
    public function selectAll();
    public function deleteProductById($arr);
    public function pdoPrepareSql($permitted, &$values, $source = array());
}