<?php

// function recursive(int $n)
// {
//     if ($n <= 10) {
//         echo $n."<br>";
//         recursive($n+1);
//     }    
// }
// recursive(1);

class Kalimat {
    protected $hello;
    protected $world;

    public function __construct(Hello $hello = null, World $world = null) {
        $this->hello = $hello ?: new Hello();
        $this->world = $world ?: new World();
    }

    public function print(): string
    {
        $kalimat =  $this->hello->hello();
        $kalimat .= $this->world->world();
        return $kalimat;
    }

    
}

class Hello{
    public function hello():string  {
        $hello = "Hello";
        return $hello;
    }
}

class World{
    public function world():string
    {
        $world = "World";
        return $world;
    }
}
$heloworld = new Kalimat(new Hello(), new World());

echo $heloworld->print();



