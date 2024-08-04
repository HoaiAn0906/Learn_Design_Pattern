<?php

    namespace App\src\Creational\Factory_Method_Pattern;

    class ShapeFactory
    {
        public function getShape(string $type) 
        {
            if ($type == null) {
                return null;
            }
            
            if ($type == "CIRCLE") {
                return new Circle();
            } else if ($type == "RECTANGLE") {
                return new Rectangle();
            }
            
            return null;
        }
    }