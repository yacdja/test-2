<?php
class Personne{
    public $name;
    public $adresse;
    public $zipCode;
    public $phone;
    public $email;

    //creation d'une methode 
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;
    }
}

?>