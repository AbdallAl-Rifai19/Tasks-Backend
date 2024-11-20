<?php
class Ball {
    private float $x;
    private float $y;
    private float $radius;
    private float $xDelta;
    private float $yDelta;

    public function __construct(float $x, float $y, float $radius, float $xDelta, float $yDelta) {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
        $this->xDelta = $xDelta;
        $this->yDelta = $yDelta;
    }

    public function getX() {
        return $this->x;
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function getY() {
        return $this->y;
    }

    public function setY($y) {
        $this->y = $y;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getXDelta() {
        return $this->xDelta;
    }

    public function setXDelta($xDelta) {
        $this->xDelta = $xDelta;
    }

    public function getYDelta() {
        return $this->yDelta;
    }

    public function setYDelta($yDelta) {
        $this->yDelta = $yDelta;
    }

    public function move(): void {
        $this->x += $this->xDelta;
        $this->y += $this->yDelta;
    }

    public function reflectHorizontal() {
        $this->xDelta = -$this->xDelta;
    }

    public function reflectVertical() {
        $this->yDelta = -$this->yDelta;
    }

    public function __toString(): string {
        return "Ball[$this->x,$this->y], Speed=($this->xDelta,$this->yDelta)]";
    }
}

$ball = new Ball(50.0, 50.0, 10.0, 5.0, 5.0);
echo $ball; 
echo "<br>";

// move ball
$ball->move();
echo $ball; 
echo "<br>";

$ball->reflectHorizontal();
$ball->move();
echo $ball; 
echo "<br>";


$ball->reflectVertical();
$ball->move();
echo $ball; 
?>
