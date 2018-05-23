<?php
session_start();


$bdd = new PDO('mysql:host=localhost;dbname=banana_store;charset=utf8', 'root', 'troiswa');


$mail = $_POST['mail'];
$password = $_POST['password'];
	
$sql ="SELECT * FROM user WHERE email LIKE '$mail' AND password LIKE '$password'";


$statement = $bdd->prepare($sql);
$statement->execute();
$user = $statement->fetch(\PDO::FETCH_ASSOC);

if ($user == null) {
	
	echo "identifiant ou mot de passe incorrect";
} else {

	$_SESSION['iduser'] = $user['id'];

	// echo "Bienvenue {$user['firstname']}";	

	header('Location: home.php');
}

