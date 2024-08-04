<?php

    namespace App\src\Abstract_Factory_Pattern;
    require './src/bootstrap.php';

    use App\src\Abstract_Factory_Pattern\application\Application;
    use App\src\Abstract_Factory_Pattern\factories\LinuxFactory;
    use App\src\Abstract_Factory_Pattern\factories\WindowFactory;

    class Demo
    {
        public static function run(): string
        {
            $os = PHP_OS;
            if ($os === 'Windows') { 
                $windowFactory = new WindowFactory();
                $application = new Application($windowFactory);
            } else {
                $linuxFactory = new LinuxFactory();
                $application = new Application($linuxFactory);
            }
            
            return $application->paint();
        }
    }
    
    echo Demo::run();