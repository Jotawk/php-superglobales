<?php 

function showMessage() {
		if (isset($_SESSION['success'])) {
			echo "
			<div class='info-message p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800'>
				<p>Votre produit a été ajouté avec succès</p>
			</div>";

		} else if (isset($_SESSION['error'])) {
			echo "
			<div class='info-message p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800'>
				<p>Il semblerait qu'il y ait une erreur. Merci de remplir correctement le formulaire</p>
			</div>";
		}
	}

