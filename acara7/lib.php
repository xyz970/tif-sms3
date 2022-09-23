<?php

class Person{
    var $name;
    public function __construct() {
        echo "<p>initialize class</p>";
    }
    public function set_name($new_name)
    {
        $this->name = $new_name;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function __destruct()
    {
        echo "<p>end class</p>";
    }
}