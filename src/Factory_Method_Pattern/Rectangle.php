<?php

    namespace App\src\Factory_Method_Pattern;

    class Rectangle implements Shape
    {

        public function draw()
        {
            echo "Inside Rectangle::draw() method. \n";
        }
    }