<?php

    namespace App\src\Abstract_Factory_Pattern\factories;

    use App\src\Abstract_Factory_Pattern\buttons\WindowButton;
    use App\src\Abstract_Factory_Pattern\checkboxs\WindowCheckbox;

    class WindowFactory implements GUIFactory
    {

        public function createButton(): WindowButton
        {
            return new WindowButton();
        }

        public function createCheckbox(): WindowCheckbox
        {
            return new WindowCheckbox();
        }
    }