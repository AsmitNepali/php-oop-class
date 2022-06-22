<?php
abstract class Animal {

    abstract public function move();

    public function eat() {

        echo (new ReflectionClass($this))->getShortName()." can eat"; 
        
    }
}

class Cat extends Animal{
    public function move() {
        echo "cat can jump\n";
    }
    public function sound() {
        echo "meow";
    }
}

class Dog extends Animal{
    public function move() {
        echo "Dog can run";
    }
    public function sound() {
        echo "Bark";
    }
}

$cat = new Cat();
$dog = new Dog();
$cat->move(); 
$dog->move();