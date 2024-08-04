<?php

    namespace App\src\Creational\Builder_Pattern\meals;

    use App\src\Creational\Builder_Pattern\products\ChickenBurger;
    use App\src\Creational\Builder_Pattern\products\Coke;
    use App\src\Creational\Builder_Pattern\products\Pepsi;
    use App\src\Creational\Builder_Pattern\products\VegBurger;

    class MealBuilder
    {
        public function prepareVegMeal(): Meal
        {
            $meal = new Meal();
            $meal->addItem(new VegBurger());
            $meal->addItem(new Coke());
            return $meal;
        }
        
        public function prepareNonVegMeal(): Meal
        {
            $meal = new Meal();
            $meal->addItem(new ChickenBurger());
            $meal->addItem(new Pepsi());
            return $meal;
        }
    }