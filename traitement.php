<?php
session_start();

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
		$_SESSION['success'] = "Votre produit a bien été ajouté";
		var_dump($_SESSION['success']);
	} else {
		$_SESSION['error'] = "Il semblerait qu'il y ait une erreur. Merci de remplir correctement le formulaire";
	}

}

header("location:index.php");
