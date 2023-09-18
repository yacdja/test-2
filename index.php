<?php
$host = "localhost";
$db = "31b";
$user = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

global $oPDO;
try {
    $oPDO = new PDO($dsn, $user, $password);
    if ($oPDO) {
        echo "Connected to the $db database successfully";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

require_once "class/Livre.php";

// Créez une instance de la classe Livre
$olivre = new Livre();

// Exécutez une requête SQL pour récupérer les livres
$livres = $olivre->getLivres();
echo "<br>";
echo "<br>";
var_dump($livres);

echo "<br>";
echo "<br>";
var_dump($livres[0]);

// echo "<br>";
// echo "<br>";
// $livre = $olivre->getLivreById(1);
// var_dump($livre);

// echo "<br>";
// echo "<br>";
// $alivre_to_insert=[
//     'titre'=>"titre de mon livre",
//     'auteur'=>"yacine",
//     'annee'=>2023
// ];
// $livre_added=$olivre->ajouterLivre($alivre_to_insert);
// var_dump($livres);

// echo "<br>";
// echo "<br>";
// $alivre_to_update = [
//     'titre' => "titre de mon livre modifié",
//     'auteur' => "yacine",
//     'annee' => 2023
// ];
// $livre = $olivre->updateLivreById(10, $alivre_to_update);
// var_dump($livres);

echo "<br>";
echo "<br>";

$livre = $olivre->deleteLivreById(13);

var_dump($livre);
?>
