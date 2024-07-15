<?php


require_once('../Config/Config.php');

// Préparer la requête d'insertion
// on prepare ce que l on va executer plus loin, on prepare donc ici la requete d'insertion avant d'executer 


$sql = "INSERT INTO product (titre, sous_titre) VALUES (:titre, :sous_titre/* :description*/ )";
$stmt = $pdo->prepare($sql);

// Définir les paramètres et exécuter
// on definit les parametres, on ne rajoute pas date a bindParam qui se cree par defaut (on aura supprimé description en commentaire ici)

$titre = "Exemple de titre";
$sous_titre = "Exemple de sous-titre";

//$description = "Ceci est une description d'exemple pour le produit.";
//$date = "Date de creation pour le produit";

$stmt->bindParam(':titre', $titre);
$stmt->bindParam(':sous_titre', $sous_titre);
//$stmt->bindParam(':date_creation', $date);


// Exécuter la requête

if ($stmt->execute()) {
	echo "Nouveau produit ajouté avec succès";
} else {
	echo "Erreur lors de l'ajout du produit";
}