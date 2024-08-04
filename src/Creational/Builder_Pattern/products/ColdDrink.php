<?php

    namespace App\src\Creational\Builder_Pattern\products;

    use App\src\Creational\Builder_Pattern\combos\Item;
    use App\src\Creational\Builder_Pattern\combos\Packing;
    use App\src\Creational\Builder_Pattern\TypePacked\Bottle;

    abstract class ColdDrink implements Item
    {
        public function packing(): Packing
        {
            return new Bottle();
        }

        public abstract function price(): float;
    }