<?php

abstract class ProductFactory
{
    public static function build ($incomePost)
    {
        $className = ucfirst($incomePost['type']) . 'Product';

        if (class_exists($className)) {
            $classBean = new $className($incomePost);
            return $classBean;
        } else {
            throw new Exception('Card type not found.');
        }
    }
}