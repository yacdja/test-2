<?php
require_once "class/Person.php";
require_once "class/Student.php";



$peter= new Person("peter");

// $peter->setName("Peter toto");
echo $peter->getName();

// echo $peter->address; ne fonctionne pas vu que l'adresse est en private
// $peter->address="12 montreal";

$yacine=new Student("Je suis yacine");
echo "<br>";
echo $yacine->getName();
echo "<br>";
$yacine->setStudentId(1);
echo $yacine-> getStudentId();

echo "<br>";
echo "<br>";

require_once "class/Shapes.php";

$circle=new Circle(2);
echo "Radius: " . $circle->calcArea();

echo "<br>";

$rectangle=new Rectangle(10,15);
echo "Rectangle: " . $rectangle->calcArea();

?>