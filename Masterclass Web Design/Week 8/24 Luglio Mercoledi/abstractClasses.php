<?php
abstract class Animal
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function respira()
    {
        echo "sto respirando<br>";
    }

    abstract public function verso();
}

class Dog extends Animal
{
    public function verso()
    {
        echo "Woof Woof";
    }
}

class Cat extends Animal
{
    public function verso()
    {
        echo "Meow";
    }
}

$cane1 = new Dog("Paolo");
$gatto1 = new Cat("Godrick the drafted");
echo $cane1->respira();
echo $gatto1->verso();

