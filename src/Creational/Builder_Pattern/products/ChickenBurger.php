<?php

    namespace App\src\Creational\Builder_Pattern\products;

    use App\src\Creational\Builder_Pattern\products\Burger;

    class ChickenBurger extends Burger
    {

        public function price(): float
        {
            return 50.5;
        }

        public function name(): string
        {
            return "Chicken Burger";
        }
    }