<?php

    namespace App\src\Creational\Abstract_Factory_Pattern\checkboxs;

    class WindowCheckbox implements Checkbox
    {

        public function paint()
        {
            return 'Render a checkbox in a Windows style';
        }
    }