<?php 
  class Rectangle {
    private float $length;
    private float $width;
    public function __construct(float $length, float $width) {
      $this->length = $length;
      $this->width = $width;
    }
    public function getLength(){
      return $this->length;
    }
    public function setLength($length){
       $this->length = $length;
    }
    public function getWidth(){
      return $this->width;
    }
    public function setWidth($width){
       $this->width = $width;
    }


    public function getArea(): float {
      return $this->length * $this->width;
    }
    public function getPerimeter(): float {
      return ($this->length + $this->width) * 2;
    }

    public function __toString(): string {
      return "Rectangle[length = $this->length , width = $this->width]";
    }

  }

  $rectangle = new Rectangle(10.0, 5.0);
  echo $rectangle->getLength();
  echo "<br>";
  echo $rectangle->getWidth(); 
  echo "<br>";
  echo $rectangle->getArea();
  echo "<br>";
  echo $rectangle->getPerimeter();
  echo "<br>";
  echo $rectangle;
  
?>