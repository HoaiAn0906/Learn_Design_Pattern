<?php
    require './src/bootstrap.php';

    use App\src\Factory_Method_Pattern\ShapeFactory;

    $shapeFactory = new ShapeFactory(); 
    
    $shape1 = $shapeFactory->getShape("CIRCLE");
    $shape1->draw();
    
    $shape2 = $shapeFactory->getShape("RECTANGLE");
    $shape2->draw();
