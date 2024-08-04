<?php

    namespace App\src\Abstract_Factory_Pattern\checkboxs;

    class LinuxCheckbox implements Checkbox
    {

        public function paint()
        {
            return 'Render a checkbox in a Linux style';
        }
    }