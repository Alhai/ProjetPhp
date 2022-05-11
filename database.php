<?php
try
{
	// On se connecte à MySQL
	$mysqlClient = new PDO('mysql:host=localhost;dbname=casqueandco;charset=utf8', 'Aly', 'local');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM products';
$productsStatement = $mysqlClient->prepare($sqlQuery);
$productsStatement->execute();
$productsDdb = $productsStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($productsStatement as $product) {
?>

<?php
}
?>