<?php

    namespace App\src\Creational\Builder_Pattern\TypePacked;

    use App\src\Creational\Builder_Pattern\combos\Packing;

    class Bottle implements Packing
    {

        public function pack(): string
        {
            return "Bottle";
        }
    }