<?php

    namespace App\src\Creational\Builder_Pattern;
    require './src/bootstrap.php';
    
    use App\src\Creational\Builder_Pattern\meals\MealBuilder;

    /*
    Builder Pattern (Creational Design Pattern)
    Problem: Consider a complex object that requires laborious, step-by-step initialization of many fields and nested objects.
    Solution: The Builder pattern suggests that you extract the object construction code out of its own class and move it to separate objects called builders.
    Structure: 
        - Product: The final object that the builder constructs. (Meal)
        - Builder: An interface that specifies how to build parts of the product. (Item)
        - Concrete Builder: A class that implements the Builder interface to construct and assemble parts of the product. (VegBurger, ChickenBurger, Coke, Pepsi)
        - Director: A class that constructs the product using the builder interface. (MealBuilder)
    */
        
    class BuilderPatternDemo
    {
        public function run(): void
        {
            $mealBuilder = new MealBuilder();

            $vegMeal = $mealBuilder->prepareVegMeal();
            echo "Veg Meal\n";
            $vegMeal->showItems();
            echo "Total Cost: " . $vegMeal->getCost() . "\n";

            $nonVegMeal = $mealBuilder->prepareNonVegMeal();
            echo "\n\nNon-Veg Meal\n";
            $nonVegMeal->showItems();
            echo "Total Cost: " . $nonVegMeal->getCost() . "\n";
        }
    }
    
    $builderPatternDemo = new BuilderPatternDemo();
    $builderPatternDemo->run();