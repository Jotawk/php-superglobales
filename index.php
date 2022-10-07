<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercice superglobales</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

	<form action="traitement.php" method="post">
		<div class="grid place-items-center h-screen">
			<div class="border-solid border-2 border-slate-900 rounded-lg p-8">
			<h1 class="text-4xl mb-8">Ajouter un produit :</h1>
				<p>
					<label>
						Nom du produit :
						<input type="text" name="name" class="border-2 border-slate-900 p-1 mb-6" required>
					</label>
				</p>
				<p>
					<label>
						Prix du produit :
						<input type="number" step="1" name="price" class="border-2 border-slate-900 p-1 mb-6" required>
					</label>
				</p>	
				<p>
					<label>
						Quantité désirée :
						<input type="number" name="qtt" value="1" class="border-2 border-slate-900 p-1 mb-6" required>
					</label>
				</p>
				<p class='mt-1'>Il y a <?php echo $_SESSION['qttTotal']?> produits présents en session </p>
				</p>
					<input type="submit" name="submit" value="Ajouter le produit" class="cursor-pointer text-white bg-blue-700 hover:bg-emerald-800 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5">
				</p>
				<div class="mt-6">
				<a href="./recap.php" class="text-white bg-slate-900 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Afficher le récapitulatif</a>
				</div>
			</div>
		</div>
	</form>

</body>

</html>