<?php

    namespace App\src\Creational\Abstract_Factory_Pattern\factories;

    interface GUIFactory
    {
        public function createButton();
        public function createCheckbox();
    }