<?php 
session_start();
include 'views/header.phtml';


$idProduit = $_GET['idProduit'];


$bdd = new PDO('mysql:host=localhost;dbname=banana_store;charset=utf8', 'root', 'troiswa');


$sql ="SELECT * FROM product WHERE id = $idProduit";



$statement = $bdd->prepare($sql);
$statement->execute();
$produit = $statement->fetch(\PDO::FETCH_ASSOC);



	echo "<div class='cardProduit'>";
	echo "Name :" . " " . $produit['name'] . "<br>";
	echo "Price : " . " " .$produit['price']. "euros" . "<br>";
	echo "Quantity : " . " " . $produit['quantity'] . " " . "pièces" ."<br>";
	echo '<img src="' . $produit["photo"] . '" />' . "<br>"; 
	echo "</div>";





include 'views/footer.phtml'; ?>