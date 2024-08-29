<?php
interface Form {
    public function area();
    public function perimeter();
}

class Circle implements Form {
    private int $radius;
    public function __construct(int $radius) {
        $this->radius = $radius;
    }
    public function area() {
        return "Area del cerchio: ".pi()*$this->radius*$this->radius."<br>";
    }

    public function perimeter() {
        return "Perimetro del cerchio: ". 2*pi()*$this->radius."<br>";
    }
}

class Rectangle implements Form {
    private int $width;
    private int $height;
    public function __construct(int $width, int $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return "Area del Rettangolo: ".$this->width*$this->height."<br>";
    }

    public function perimeter() {
        return "Perimetro del Rettangolo: ". 2*($this->height+$this->width)."<br>";
    }
}

class Calculator {
    private Form $form;
    public function __construct(Form $form) {
        $this->form = $form;
    }

    public function area(){
        return $this->form->area()."<br>";
    }
}

$rectangle = new Rectangle(7,5);
$circle = new Circle(3);
echo $rectangle->area();
echo $rectangle->perimeter();
echo $circle->area();
echo $circle->perimeter();
$calculator = new Calculator($circle);
echo $calculator->area();