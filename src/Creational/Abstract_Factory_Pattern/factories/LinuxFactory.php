<?php

    namespace App\src\Creational\Abstract_Factory_Pattern\factories;

    use App\src\Creational\Abstract_Factory_Pattern\buttons\LinuxButton;
    use App\src\Creational\Abstract_Factory_Pattern\checkboxs\LinuxCheckbox;

    class LinuxFactory implements GUIFactory
    {

        public function createButton(): LinuxButton
        {
            return new LinuxButton();
        }

        public function createCheckbox(): LinuxCheckbox
        {
            return new LinuxCheckbox();
        }
    }