<?php
interface Shapes{
    public function calcArea();
}

class Circle implements Shapes{
    private $radius;

    public function __construct($radius){
        $this->radius=$radius;
    }

    public function calcArea(){
        return $this->radius * $this->radius*pi();
    }
}

class Rectangle implements Shapes{
    private $width;
    private $height;

    public function __construct($width,$height){
        $this->width=$width;
        $this->height=$height;
    }

    public function calcArea(){
        return $this->width*$this->height;
    }
}