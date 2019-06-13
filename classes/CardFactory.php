<?php

abstract class CardFactory {



    public static function build ($incomePost)
    {

            $className = ucfirst($incomePost['type']) . 'Card';

            // Assuming Class files are already loaded using autoload concept
            if(class_exists($className)) {
                $classBean = new $className($incomePost);
                return $classBean;
            } else {
                throw new Exception('Card type not found.');
            }

    }
}