<?php
class Animal
{
    public function makeSound()
    {
        echo "Some animals making sounds";

    }
}
class Dog extends Animal
{
    public function makeSound()
    {
        echo "The Dog is Barking";

    }

}
class Cat extends Animal
{
    public function makeSound()
    {
        echo "The Cat is mewing mewing";

    }

}
class Cow extends Animal
{

    public function makeSound()
    {
        echo " The cow make  Moo Sound\n";
    }
}
$dog = new Dog();
$cat = new Cat();
$cow = new Cow();

$dog->makeSound();
$cat->makeSound();
$cow->makeSound();
