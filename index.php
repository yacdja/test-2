<?php
require_once "Personne.php";

$peter= new Personne();

$peter->setName("Peter");
echo $peter->getName();

// echo $peter->address; ne fonctionne pas vu que l'adresse est en private
// $peter->address="12 montreal";

?>