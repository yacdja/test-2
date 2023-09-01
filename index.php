<?php
require_once "Personne.php";

$peter= new Personne();

$peter->setName("Peter");
echo $peter->getName();
?>