<?php
class Circle {
    private float $radius;
    private string $color;

    public function __construct($radius = 1.0, $color = 'red') {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    // Method to get the string representation of the circle
    public function getDescription() {
      return "Circle[radius = $this->radius, color = $this->color]";
  }
}

?>
<?php

// default constructor
$circle1 = new Circle();
echo $circle1->getDescription();  
echo "<br>";

$circle2 = new Circle(5.5, "blue");

echo $circle2->getDescription();  
echo "<br>";

$circle1->setRadius(3.3);
$circle1->setColor("green");
echo $circle1->getDescription(); 
echo "<br>";
echo $circle1->getArea();
?>