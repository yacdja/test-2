<?php
class Person{
    private $name;
    private $address;
    public $zipCode;
    public $phone;
    public $email;

    //creation d'un constructeur
    function __construct($name=null){
        $this->name=$name;
    }

    //creation d'une methode 
    public function getName(){
        return $this->name;
    }
    
    public function setName($name){
        $this->name=$name;
    }

    public function __destruct() {
        $this->name="";
    }
    
}

?>