<?php
abstract class Person{
    public abstract function greet();
}

class English extends Person{
    
    public function greet()
    {
        echo "Hello..";
    }
}

class German extends Person{
    
    public function greet()
    {
      echo "Hallo..";   
    }
}

class French extends Person{
    
    public function greet()
    {
       echo "Bonjour.."; 
    }
}
$english = new English();
$german = new German();
$french = new French();

$english->greet();
echo "<br>";
$german->greet();
echo "<br>";
$french->greet();
echo "<br>";