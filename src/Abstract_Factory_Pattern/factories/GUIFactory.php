<?php

    namespace App\src\Abstract_Factory_Pattern\factories;

    interface GUIFactory
    {
        public function createButton();
        public function createCheckbox();
    }