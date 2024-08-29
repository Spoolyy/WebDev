<?php
class Vehicle {
    public string $make;
    public string $model;
    public int $year;
    public function __construct(string $make, string $model, int $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getInfo() {
        return "Make: ".$this->make."<br>Model: ".$this->model."<br>Year: ".$this->year."<br><br>";
    }
}

class Car extends Vehicle {
    public int $doors = 0;
    public function __construct(string $make, string $model, int $year, int $doors) {
        $this->doors = $doors;
        parent::__construct($make, $model, $year);
    }
    public function getInfo() {
        return "Make: ".$this->make."<br>Model: ".$this->model."<br>Year: ".$this->year."<br>"."The Vehicle has ".$this->doors." Doors.<br><br>";
    }
}

class Bike extends Vehicle {
    public string $type;
    public function __construct(string $make, string $model, int $year, string $type) {
        $this->type = $type;
        parent::__construct($make, $model, $year);
    }
    public function getInfo() {
        return $this->year." ".$this->model." This bike is type: ".$this->type." Bike<br><br>";
    }
}

$vehicle1 = new Car("Nissan", "Skyline",1999,2);
$vehicle2 = new Bike("Ferrari","TwoWheeler",2024,"Mountain");
echo $vehicle1->getInfo(); 
echo $vehicle2->getInfo();