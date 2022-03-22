<?php
class Shape {
    public function shapeType() {
        echo "<br>The shape of the object is quadrilateral and is four sided.";
    }
}
class Circle extends Shape {
    public function shapeType() {
        echo "<br>The circle is round.";
    }
}
$square = new Shape();
$square->shapeType();
$circle = new Circle();
$circle->shapeType();
?>