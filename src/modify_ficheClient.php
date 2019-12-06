<?php
	session_start();

		require_once '../admin/database.php';
		require_once 'function.php';

		//on fait une redirection si l'id n'est pas spécifié
		if(!isset($_GET['id'])) {
			header('location:index.php');
		}

		//On recup les infos de l'id
		$client = getClient($db,1, $_GET['id']);

		//on verifie si l'admin est connecté ou si la session est vide
		if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {

			header('location:index.php');
		}

		include('modify_ficheClient.phtml');


/***************************AJOUT D'UN NOUVEAU CHAMP**************************/


					if (isset($_POST['addNewCh'])) {

						  	$champ = htmlspecialchars(trim($_POST['NouveauChamp']));
						  
						$error= [];	
						  	
					

						if (empty($champ)) {
						
							$errors["empty"] = "Veuillez remplir tous les champs !";
						}

						if(!empty($errors)) {

							foreach ($errors as $error) {
							
							echo $error;
						
						}

						}else {

							addNewChamp($champ);

						}	

					}


/***************************AJOUT D'UNE VALEUR********************************/	
			
				
				if (isset($_POST['valeur']) && isset($_POST['idClient']) && isset($_POST['idChamp'])) {
					

					$valeur = htmlspecialchars(trim($_POST['valeur']));

					$error = [];


					if (empty($valeur)) {

						$errors["empty"] = "Veuillez remplir tous les champs !";

					}

					if (!empty($errors)) {
						
						foreach ($errors as $error) {
							
							echo $error;
						
						}

					}else {

						addValeur($valeur, $_POST['idClient'], $_POST['idChamp']);

					}
				}




