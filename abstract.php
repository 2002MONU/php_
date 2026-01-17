<?php
 abstract class Vehicle {
    abstract public function startEngine();
    abstract public function stopEngine();

  function fuelType() {
        return "Diesel";
    }  
 }

    class Car extends Vehicle {
        public function startEngine() {
            return "Car engine started.";
        }
    
        public function stopEngine() {
            return "Car engine stopped.";
        }
    }

     $myCar = new Car();
        echo $myCar->startEngine();

        echo "<br>";
        echo $myCar->fuelType();

?>