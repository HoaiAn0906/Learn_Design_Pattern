<?php

    namespace App\src\Creational\Builder_Pattern\TypePacked;

    use App\src\Creational\Builder_Pattern\combos\Packing;

    class Wrapper implements Packing
    {

        /**
         * @return string
         */
        #[\Override] public function pack(): string
        {
            return "Wrapper";
        }
    }