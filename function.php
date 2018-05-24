
<?php
function getProductList($word = null) {
	$user = 'root';
	$password = 'troiswa';
	$db = new PDO('mysql:host=localhost;dbname=bananastore', $user, $password);
	$db->exec('SET NAMES UTF8');
	if ($word) {
		$sql = "SELECT * FROM product WHERE name LIKE '%$word%' OR description LIKE '%$word%'";
	} else {
		$sql = "SELECT * FROM product";
	}
	$statement = $db->prepare($sql);
	$statement->execute();
	$products = $statement->fetchAll(\PDO::FETCH_ASSOC);
	return $products;
}
function getProductById($id) {
	
	$sql = "SELECT * FROM product WHERE id = $id";
	$db = new PDO('mysql:host=localhost;dbname=bananastore', 'root', 'troiswa');
	$statement = $db->prepare($sql);
	$statement->execute();
	$product = $statement->fetch(\PDO::FETCH_ASSOC);
	return $product;
} 








