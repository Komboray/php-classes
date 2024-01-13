<?php

Class Car{
    //we need to create the properties that we need for the car
    private $brand;
    private $color;
    public $vehicalEngine = "V6";

    //we are going to create the constructor
    public function __construct($brand, $color){
        $this->brand = $brand;
        $this->color = $color;
    }

    //we are going to create the getter & setter for the brand
    public function getBrand(){
        return $this->brand;
    }

    public function setBrand($brand){
        return $this->brand;
    }

    //we are going to create the getter & setter for the color
    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        return $this->color;
    }
}