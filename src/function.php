<?php

/*****************FONCTION POUR AFFICHER LA FICHE CLIENT******************/

	function getClient($db, $nb = null, $id = null) {

		if ($nb AND !$id) {
			$req = $db->query('SELECT * FROM clients LIMIT'.$nb);
			$clients = $req->fetchAll();

		}elseif($id){

			$req = $db->query('SELECT * FROM clients WHERE id ='.$id);
			$clients = $req->fetchObject();

		}else{

			$req = $db->query('SELECT * FROM clients');
			$clients = $req->fetchAll();

		}

		return $clients;
	}


/*************************FONCTION POUR AJOUTER UN CLIENT*****************************/


		function addClient($name){

			global $db;

			$p = [
				'name'  =>   $name,
			];


			$sql = "INSERT INTO CLIENTS(name) VALUES (:name)";

			$req = $db->prepare($sql);
			$req->execute($p);
			header("location:index.php");

		}


/************************FONCTION POUR RECUP LES DONNEES DE LA BDD ET LES AFFICHER DANS LA FICHE CLIENT (ficheClient.php)*********************/

	//ICI LES CHAMPS//

	$req = $db->query('SELECT * FROM champs;');

	$champ = $req->fetchAll();


	//ICI LES VALEURS DES CHAMPS//

	$req = $db->query('SELECT * FROM valeurchamps;');

	$valeur = $req->fetchAll();


/***************************INSERTION DE LA VALEUR*************************/		


		function addValeur($valeur, $client, $champ){

			global $db;

		//Dans ce tableau on récupère les champs de la table valeurchamps	

			$p = [
				'valeurDuchamp'  =>  $valeur,
				'idClient'  =>  $client,
				'idChamp'  =>  $champ

			];



			$sql = "INSERT INTO valeurchamps(valeurs, id_clients, id_champs ) VALUES (:valeurDuchamp, :idClient, :idChamp);";

			$req = $db->prepare($sql);

			$req->execute($p);

			header("location:index.php");

		}



/**************************INSERTION D'UN NOUVEAU CHAMP***************************** (modify_ficheClient.php)***********************/

		
		function addNewChamp($champ){

			global $db;

			$p = [
				'champACreer' => $champ
				];


			$sql = "INSERT INTO champs(libelle) VALUES (:champACreer);";

			$req = $db->prepare($sql);
		
			$req->execute($p);

			header("location:index.php");

		}

