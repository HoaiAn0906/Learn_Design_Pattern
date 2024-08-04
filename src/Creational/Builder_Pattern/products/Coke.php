<?php

    namespace App\src\Creational\Builder_Pattern\products;

    class Coke extends ColdDrink
    {

        /**
         * @return float
         */
        public function price(): float
        {
            return 30.0;
        }

        /**
         * @return string
         */
        public function name(): string
        {
            return "Coke";
        }
    }