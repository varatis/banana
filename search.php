
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

include 'views/header.phtml';

?>

<?php

foreach ($reponse as $donnees) { 

	echo "<div class='cardProduit'>";
	echo "Name :" . " " . $donnees['name'] . "<br>";
	echo "Price : " . " " .$donnees['price']. "euros" . "<br>";
	echo "Quantity : " . " " . $donnees['quantity'] . " " . "pièces" ."<br>";
	echo '<img src="' . $donnees["photo"] . '" />' . "<br>"; 
	echo "</div>";

} 

$reponse->closeCursor(); 

include 'views/footer.phtml';