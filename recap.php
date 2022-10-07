<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Récapitulatif des produits</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
</head>

<body>
	<?php
	if (!isset($_SESSION['products']) || empty($_SESSION['products'])) {
		echo "<p>Aucun produit en session...</p>";
	} else {
		echo
			"<div class='grid place-items-center h-screen'>",
				"<div>",
				"<table class='table-auto border-spacing-3 border border-slate-400 text-center'>",
					"<thead>",
						"<tr>",
							"<th class='border-slate-300'>#</th>",
							"<th class='border border-slate-300 bg-slate-300 p-4'>Nom</th>",
							"<th class='border border-slate-300 bg-slate-300 p-3'>Prix</th>",
							"<th class='border border-slate-300 bg-slate-300 p-3'>Quantité</th>",
							"<th class='border border-slate-300 bg-slate-300 p-3'>Total</th>",
						"</tr>",
					"</thead>",
					"<tbody>",
				"</div>";

			$totalGeneral = 0;
			$qttTotal = 0;

			foreach ($_SESSION['products'] as $index => $product) {
				echo
					"<tr>",
						"<td class='border-slate-300 p-4'>".$index."</td>",
						"<td class='border border-slate-300'>".$product['name']."</td>",	
						"<td class='border border-slate-300'>". number_format($product['price'], 2, ",", "&nbsp;") . "&nbsp;€</td>",	
						"<td class='border border-slate-300'>".$product['qtt']."</td>",	
						"<td class='border border-slate-300'>". number_format($product['total'], 2, ",", "&nbsp;") . "&nbsp;€</td>",
					"</tr>";	
				$totalGeneral += $product['total'];
				$qttTotal += $product['qtt'];
				$_SESSION['qttTotal'] = $qttTotal;

				}
				echo
					"<tr>",
						"<td colspan=4 class='border border-slate-300 bg-slate-500 p-4 font-bold'>Total général : </td>",
						"<td><strong class='border-slate-300 p-3'>". number_format($totalGeneral, 2, ",", "&nbsp;") . "&nbsp;€</td>",
					"</tr>",
					"</tbody>",
				"</table>";
			"</div>";
		}
		?>

		<?php 
		if (isset($_SESSION['qttTotal'])) { 
				echo " {$_SESSION['qttTotal']} produits présents en session";  
			  } else {
				echo "<p class='mt-4'> 0 produit présent en session </p>";
			  }?></p>

		<div class="mt-6">
		<a href="./index.php" class="text-white bg-slate-900 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="fa-solid fa-left-long"></i>&ensp; Retourner à l'index</a>
		</div>

</body>

</html>