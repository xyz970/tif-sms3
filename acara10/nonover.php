<?php
class Cars{

    public function hello()
    {
        return "beep";
    }

}

class SportCar extends Cars{
    public function hello()
    {
        return "Hallo";
    }
}

$sportcars1 = new SportCar();

echo $sportcars1->hello();
