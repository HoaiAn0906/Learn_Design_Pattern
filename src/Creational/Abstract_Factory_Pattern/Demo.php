<?php

    namespace App\src\Creational\Abstract_Factory_Pattern;
    require './src/bootstrap.php';

    use App\src\Creational\Abstract_Factory_Pattern\application\Application;
    use App\src\Creational\Abstract_Factory_Pattern\factories\LinuxFactory;
    use App\src\Creational\Abstract_Factory_Pattern\factories\WindowFactory;

    /*
    Abstract Factory Pattern (Creational Design Patterns)
    Problem: You need to create a family of related objects, but you don't want to depend on their concrete classes.
    Solution: Define an interface for creating an object, but let subclasses decide which class to instantiate. Factory Method lets a class defer instantiation to subclasses.
    Structure of Abstract Factory Pattern
        AbstractFactory: Declare an interface for operations to create abstract product objects. (GUIFactory)
        ConcreteFactory: Implement operations to create specific product objects. (WindowFactory, LinuxFactory)
        AbstractProduct: Declare an interface for a product object type. (Button, Checkbox)
        Product: Implement interface of AbstractProduct. (WindowButton, LinuxButton, WindowCheckbox, LinuxCheckbox)
        Client: Use the AbstractFactory and AbstractProduct interfaces to work with concrete objects. (Application)
    */
    
    class Demo
    {
        public static function run(): string
        {
            $os = PHP_OS;
            if ($os === 'Windows') { 
                $windowFactory = new WindowFactory();
                $application = new Application($windowFactory);
            } else {
                $linuxFactory = new LinuxFactory();
                $application = new Application($linuxFactory);
            }
            
            return $application->paint();
        }
    }
    
    echo Demo::run();