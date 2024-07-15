<?php

require_once('../Config/Config.php');
//$products = [];
// Préparer la requête GET

$stmt = $pdo->query("SELECT * FROM product");



// Exécuter la requête on recupere
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);


// permet de faire une requête SELECT sans parametres
//$stmt = $pdo->query("SELECT * FROM products");
// retourne dans un tableau tous les produits 
//$products = $stmt->fetch();

