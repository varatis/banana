<?php 
session_start();

include 'views/header.phtml';
?>

<main class="cards">

	<?php 


	$bdd = new PDO('mysql:host=localhost;dbname=banana_store;charset=utf8', 'root', 'troiswa'); 

	$reponse = $bdd->query('SELECT * FROM product');


	// while ($donnees = $reponse->fetch()) 
	foreach ($reponse as $donnees) { 

	echo "<div class='card'>";
	echo '<img src="' . $donnees["photo"] . '" />' . "<br>"; 
	echo "Name :" . " " . $donnees['name'] . "<br>";
	echo "Price : " . " " .$donnees['price']. "euros" . "<br>";
	echo "Quantity : " . " " . $donnees['quantity'] . " " . "pièces" ."<br>";
	echo '<a href="produit.php?idProduit='.$donnees['id'].'">voir le produit</a>';
	echo "</div>";


	} 

	$reponse->closeCursor(); 


	?>
</main>
		
<?php include 'views/footer.phtml'; ?>


