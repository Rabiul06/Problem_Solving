<?php
class Animal {
    public function makeSound() {
        echo "The animal makes a sound.\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "The dog barks.\n";
    }
}

$animal = new Animal();
$animal->makeSound();   

$dog = new Dog();
$dog->makeSound();     
?>