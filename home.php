<?php 
session_start();
?>

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


			<?php
				//print_r($_SESSION);
			if (isset($_SESSION['iduser'])) {
				$iduser = $_SESSION['iduser'];

				// print_r($iduser);


				$bdd = new PDO('mysql:host=localhost;dbname=banana_store;charset=utf8', 'root', 'troiswa');
				$sql = "SELECT * FROM user WHERE id=$iduser";					

				$statement = $bdd->prepare($sql);
				$statement->execute();
				$user = $statement->fetch(\PDO::FETCH_ASSOC);

				// print_r($user);

				echo 'Bienvenue' . " " . $user['firstname'] . '<img src="' . $user['photo'] . '" />';

			} else {



				echo "je ne suis pas connecté";	

			
			}
			?>

		</header>
		<main>


<form action="register.php" method="post">
		<fieldset>
			<legend>Identification</legend>
		
					<label for="mail"></label>
					<input type="text" name="mail" value="Adresse Mail"></br>
					<label for="password"></label>
					<input type="password" name="password" value="Password"></br>

					<input type="submit" name="submit" value="recherche">
					</fieldset>
	</form>

			<form action="search.php" method="get">
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

