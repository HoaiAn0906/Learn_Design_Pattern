<?php

    namespace App\src\Creational\Builder_Pattern\meals;

    use App\src\Creational\Builder_Pattern\combos\Item;

    class Meal
    {
        private $items = [];

        public function addItem(Item $item): void
        {
            $this->items[] = $item;
        }

        public function getCost(): float
        {
            $cost = 0.0;
            foreach ($this->items as $item) {
                $cost += $item->price();
            }
            return $cost;
        }

        public function showItems(): void
        {
            foreach ($this->items as $item) {
                echo "Item: " . $item->name();
                echo ", Packing: " . $item->packing()->pack();
                echo ", Price: " . $item->price();
            }
        }
    }