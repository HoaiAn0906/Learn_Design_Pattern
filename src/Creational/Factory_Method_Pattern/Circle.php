<?php

    namespace App\src\Creational\Factory_Method_Pattern;

    class Circle implements Shape
    {

        public function draw()
        {
            echo "Inside Circle::draw() method. \n";
        }
    }