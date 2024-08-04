<?php

    namespace App\src\Creational\Abstract_Factory_Pattern\buttons;

    class WindowButton implements Button
    {

        public function paint()
        {
            return 'Render a button in a Windows style';
        }
    }