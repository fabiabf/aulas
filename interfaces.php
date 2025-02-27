<?php
// Define an interface
interface Animal {
    public function makeSound();
}

// Implement the interface in a class
class Dog implements Animal {
    public function makeSound() {
        return "Lobo!";
    }
}

class Cat implements Animal {
    public function makeSound() {
        return "Gato!";
    }
}

// Using the classes
$dog = new Dog();
echo $dog->makeSound(); // Outputs: Woof!

$cat = new Cat();
echo $cat->makeSound(); // Outputs: Meow!