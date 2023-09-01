<?php
class Personne{
    private $name;
    private $address;
    public $zipCode;
    public $phone;
    public $email;

    //creation d'une methode 
    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
}

?>