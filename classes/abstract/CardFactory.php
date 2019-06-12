<?php

abstract class CardFactory {



    public static function build ($type = '',$name,$price,$sku,$weight,$size,$height,$width,$length)
    {

        if($type == '') {
            throw new Exception('Invalid Card Type.');
        } else {
            $className = ucfirst($type) . 'Card';

            // Assuming Class files are already loaded using autoload concept
            if(class_exists($className)) {
                $classBean = new $className($name, $price, $sku,$weight,$size,$height,$width,$length,$type);
                return $classBean;
            } else {
                throw new Exception('Card type not found.');
            }
        }
    }
}