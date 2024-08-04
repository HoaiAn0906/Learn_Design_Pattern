<?php

    namespace App\src\Creational\Abstract_Factory_Pattern\application;

    use App\src\Creational\Abstract_Factory_Pattern\buttons\Button;
    use App\src\Creational\Abstract_Factory_Pattern\checkboxs\Checkbox;
    use App\src\Creational\Abstract_Factory_Pattern\factories\GUIFactory;

    class Application
    {
        private Button $button;
        private Checkbox $checkbox;

        public function __construct(GUIFactory $factory)
        {
            $this->button = $factory->createButton();
            $this->checkbox = $factory->createCheckbox();
        }

        public function paint(): string
        {
            return $this->button->paint() . ' and ' . $this->checkbox->paint() . "\n";
        }
    }