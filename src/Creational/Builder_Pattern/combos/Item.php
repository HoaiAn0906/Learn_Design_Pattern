<?php

    namespace App\src\Creational\Builder_Pattern\combos;

    interface Item
    {
        public function name(): string;
        public function packing(): Packing;
        public function price(): float;
    }