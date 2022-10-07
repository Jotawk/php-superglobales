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
							"<th class='border border-slate-300 bg-slate-300 p-3'>Nom</th>",
							"<th class='border border-slate-300 bg-slate-300 p-3'>Prix</th>",
							"<th class='border border-slate-300 bg-slate-300 p-3'>Quantité</th>",
							"<th class='border border-slate-300 bg-slate-300 p-3'>Total</th>",
						"</tr>",
					"</thead>",
					"<tbody>",
				"</div>";

			$totalGeneral = 0;

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
				}
				echo
					"<tr>",
						"<td colspan=4 class='border border-slate-300 bg-slate-500'>Total général : </td>",
						"<td><strong class='border border-slate-300'>". number_format($totalGeneral, 2, ",", "&nbsp;") . "&nbsp;€</td>",
					"</tr>",
					"</tbody>",
				"</table>",
			"</div>";
		}

	?>
</body>

</html>