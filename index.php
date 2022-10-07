<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercice superglobales</title>
	<!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>

<body>
	<h1 class="text-4xl">Ajouter un produit</h1>
	<form action="traitement.php" method="post">
		<p>
			<label>
				Nom du produit :
				<input type="text" name="name">
			</label>
		</p>
		<p>
			<label>
				Prix du produit :
				<input type="number" step="1" name="price">
			</label>
		</p>
		<p>
			<label>
				Quantité désirée :
				<input type="number" name="qtt" value="1">
			</label>
		</p>
		<p>
			<input type="submit" name="submit" value="Ajouter le produit">
		</p>
	</form>
	<a href="./recap.php">Afficher le récapitulatif</a>
</body>

</html>