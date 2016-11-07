<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=contact;charset=utf8','root','');
}
catch(Exception $e) {
    die('Erreur connexion base de données : ' . $e->getMessage());
}



$requete = $bdd->prepare('SELECT * FROM client WHERE fk_id_categorie = :fk_id_categorie');
$requete->execute(array(
    "fk_id_categorie" => $_POST["categorie"]
));

$tablereponse = array();
while($donnees = $requete->fetch(PDO::FETCH_OBJ)) {
    $tablereponse[] = $donnees;
}
echo json_encode($tablereponse);
?>