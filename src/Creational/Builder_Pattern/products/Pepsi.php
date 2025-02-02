<?php

    namespace App\src\Creational\Builder_Pattern\products;

    use App\src\Creational\Builder_Pattern\products\ColdDrink;

    class Pepsi extends ColdDrink
    {

        public function price(): float
        {
            return 35.0;
        }

        public function name(): string
        {
            return "Pepsi";
        }
    }