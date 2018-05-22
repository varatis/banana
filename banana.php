<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Document</title>
	</head>
	<body>
		<header>
			<h1>La Boutique du Fruit</h1>
		</header>
		<main>
			<form action="fruit.php" method="get">
				<label for="fruit">Recherche du fruit</label>
				<input type="text" name="word"></br>
				<input type="submit" name="submit" value="recherche">
			</form>
		</main>
		
	</body>
</html>

<?php 

$bdd = new PDO('mysql:host=localhost;dbname=banana_store;charset=utf8', 'root', 'troiswa'); 

$reponse = $bdd->query('SELECT * FROM product');


// while ($donnees = $reponse->fetch()) 
foreach ($reponse as $donnees) { 

echo "<div class='zoom'>";
echo "Name :" . " " . $donnees['name'] . "<br>";
echo "Price : " . " " .$donnees['price']. "euros" . "<br>";
echo "Quantity : " . " " . $donnees['quantity'] . " " . "pièces" ."<br>";
echo '<img src="' . $donnees["photo"] . '" />' . "<br>"; 
echo "</div>";

} 

$reponse->closeCursor(); 


?>

