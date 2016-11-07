<?php

try {
    $bdd = new PDO('mysql:host=192.168.56.103;dbname=contact;charset=utf8','root','');
}
catch(Exception $e) {
    die('Erreur connexion base de données : ' . $e->getMessage());
}



$sql = "SELECT * FROM categorie";

$reponse = $bdd->query($sql);
$tablereponse = array();
while($donnees = $reponse->fetch(PDO::FETCH_OBJ)) {
    $tablereponse[] = $donnees;
}
echo json_encode($tablereponse);




?>