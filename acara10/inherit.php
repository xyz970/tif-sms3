<?php 
class Cars{
    protected $model;
    
    public function setModel($model)
    {
        $this->model = $model;
    }

    public function hello()
    {
        return "beep i'm a <i>".$this->model."<i> <br>";
    }

}

class SportCar extends Cars{

}

$sportcars1 = new SportCar();
$sportcars1->setModel('Mercedez Benz');
echo $sportcars1->hello();