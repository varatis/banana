<?php
include '../bootstrap.php';
//création du panier
if (isset($_SESSION['cart']) == false) {
	$_SESSION['cart'] = [];		
}
// ajout d'un produit au panier
//$id = $_GET['id'];
$_SESSION['cart'][] = 1;
$_SESSION['cart'][] = 2;
$_SESSION['cart'][] = 3;
pre($_SESSION);
// header - pour montrer le nombre de produits dans le panier
$productInCartNumber = count($_SESSION['cart']);
echo "Nombre de produits dans le panier: $productInCartNumber<br>";
// page panier
$ids = $_SESSION['cart'];
pre($ids);
$products = [];
foreach ($ids as $id) {
	$product = getProductById($id);
	$products[] = $product;
}
pre($products);
// ensuite afficher en html les produits comme dans la page d'accueil
