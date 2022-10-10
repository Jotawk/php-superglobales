<?php
session_start();

$action = $_GET["action"];

switch($action) {
	case "ajouterProduit":
		if (isset($_POST['submit'])) {
			$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
			$price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
			$qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);
		
			if ($name && $price && $qtt) {
		
				$product = [
					"name" => $name,
					"price" => $price,
					"qtt" => $qtt,
					"total" => $price * $qtt
				];
		
				$_SESSION['products'][] = $product;
				$_SESSION['success'] = true;
		
			} else {
				$_SESSION['success'] = null;
				$_SESSION['error'] = true;
			}
			header("location:index.php");	
		}
	break;

	case "viderPanier":
		unset($_SESSION["products"]);
		header("location:recap.php");
	break;
}






