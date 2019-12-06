<?php
session_start();

		require_once('../admin/database.php');

				if(!$_SESSION['admin']) {

					header('location: ../admin/login.php');
					exit();

				}

		$req = $db->query('SELECT * FROM clients');

		$clients = $req->fetchAll();

		//On appel le template//
		include('index.phtml');



		