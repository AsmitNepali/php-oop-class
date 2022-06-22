<?php
class Food {

    public $name;
    protected $type;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public static function addType($name, $type){
        return new static($name, $type);
    }

    public function foodType(){
        echo $this->type;
    }
}

$food = Food::addType("Momo","Khaja");
var_dump($food);

