
<?php

session_start();


$bdd = new PDO('mysql:host=localhost;dbname=banana_store;charset=utf8', 'root', 'troiswa');

if (isset($_GET['word'])) {
	
	$word = $_GET['word'];
	
	$sql ="SELECT * FROM product WHERE name LIKE '%$word%'";

} else {
	
	$sql = 'SELECT * FROM product';

}

$reponse = $bdd->query($sql);



// JE REPREND L ID DE USER POUR AFFICHER LE MESSAGE SUR LA PAGE -- VOIR REGISTER.PHP
if (isset($_SESSION['iduser'])) {
				
				$iduser = $_SESSION['iduser'];
				// print_r($iduser);
				
				$bdd = new PDO('mysql:host=localhost;dbname=banana_store;charset=utf8', 'root', 'troiswa');
				$sql = "SELECT * FROM user WHERE id=$iduser";					

				$statement = $bdd->prepare($sql);
				$statement->execute();
				$user = $statement->fetch(\PDO::FETCH_ASSOC);

				// print_r($user);


				echo 'Voila votre demande' . " " . $user['firstname'] . "</br>";

}

foreach ($reponse as $donnees) { 

	echo "<div class='zoom'>";
	echo "Name :" . " " . $donnees['name'] . "<br>";
	echo "Price : " . " " .$donnees['price']. "euros" . "<br>";
	echo "Quantity : " . " " . $donnees['quantity'] . " " . "pièces" ."<br>";
	echo '<img src="' . $donnees["photo"] . '" />' . "<br>"; 
	echo "</div>";

} 

$reponse->closeCursor(); 