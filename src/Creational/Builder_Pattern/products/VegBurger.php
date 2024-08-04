<?php

    namespace App\src\Creational\Builder_Pattern\products;

    class VegBurger extends Burger
    {

        /**
         * @return float
         */
        #[\Override] public function price(): float
        {
            return 25.0;
        }

        /**
         * @return string
         */
        #[\Override] public function name(): string
        {
            return "Veg Burger";
        }
    }