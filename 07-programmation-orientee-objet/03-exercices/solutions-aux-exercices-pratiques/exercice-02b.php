<?php
class Vehicle {
    const BRAND_TOYOTA = 'Toyota';
    const BRAND_YAMAHA = 'Yamaha';
    const BRAND_VOLVO = 'Volvo';

    const TYPE_CAR = 'Car';
    const TYPE_MOTORCYCLE = 'Motorcycle';
    const TYPE_TRUCK = 'Truck';
    const TYPE_UNKNOWN = 'Unknown';

    private $numberOfWheels;
    private $color;
    private $brand;
    private $model;

    public function __construct($numberOfWheels, $color, $brand, $model) {
        $this->numberOfWheels = $numberOfWheels;
        $this->color = $color;
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getNumberOfWheels() {
        return $this->numberOfWheels;
    }

    public function setNumberOfWheels($numberOfWheels) {
        $this->numberOfWheels = $numberOfWheels;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getDescription() {
        return "$this->brand $this->model, $this->color, $this->numberOfWheels wheels";
    }

    public function type() {
        if ($this->numberOfWheels == 2) {
            return self::TYPE_MOTORCYCLE;
        } elseif ($this->numberOfWheels == 4) {
            return self::TYPE_CAR;
        } elseif ($this->numberOfWheels > 4) {
            return self::TYPE_TRUCK;
        } else {
            return self::TYPE_UNKNOWN;
        }
    }
}

$toyota = new Vehicle(4, 'Red', Vehicle::BRAND_TOYOTA, 'Corolla');
$yamaha = new Vehicle(2, 'Black', Vehicle::BRAND_YAMAHA, 'MT-07');
$volvo = new Vehicle(6, 'Blue', Vehicle::BRAND_VOLVO, 'FH16');
$ufo = new Vehicle(0, 'Green', 'UFO', 'X-2000');

echo $toyota->getDescription() . " - Type: " . $toyota->type() . "<br>";
echo $yamaha->getDescription() . " - Type: " . $yamaha->type() . "<br>";
echo $volvo->getDescription() . " - Type: " . $volvo->type() . "<br>";
echo $ufo->getDescription() . " - Type: " . $ufo->type() . "<br>";
