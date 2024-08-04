<?php

    namespace App\src\Abstract_Factory_Pattern\buttons;

    class LinuxButton implements Button
    {
        public function paint()
        {
            return 'Render a button in a Linux style';
        }
    }