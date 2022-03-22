<?php
class Vehicle {
    private $engine;
    private $tyre;
    private $headLight;
    private $seat;

    function __construct($engine, $tyre, $headLight)
    {
        $this->engine = $engine;
        $this->tyre = $tyre;
        $this->headLight = $headLight;
    }

    public function getEngine() {
        return $this->engine;
    }

    public function setEngine($engine) {
        $this->engine = $engine;
    }

    public function getTyre() {
        return $this->tyre;
    }

    public function setTyre($tyre) {
        $this->tyre = $tyre;
    }

    public function getHeadLight() {
        return $this->headLight;
    }

    public function setHeadLight($headLight) {
        $this->headLight = $headLight;
    }

    public function getSeat() {
        return $this->seat;
    }

    public function setSeat($seat) {
        $this->seat = $seat;
    }

    function __destruct()
    {
        echo $this->engine.". Destructor<br>";
    }
}

$honda = new Vehicle("Honda 4 stroke engine", "MRF", "Oval headlight");
$bmw = new Vehicle("BMW Khatra engine", "Khatra tyre", "Babbal headlight");

echo $honda->getEngine()."<br>";
echo $honda->getTyre()."<br>";
echo $honda->getHeadLight()."<br>";

echo $bmw->getEngine()."<br>";
echo $bmw->getTyre()."<br>";
echo $bmw->getHeadLight()."<br>";

?>