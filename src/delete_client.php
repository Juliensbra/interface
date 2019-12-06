<?php
session_start();

require_once 'admin/database.php';

	if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {
		
		if (isset($_GET['id'])) {

			$req = $db->query('SELECT * FROM clients WHERE id = '.$_GET['id']);
			$client = $req->fetch();

			if ($client) {
				
				$req = $db->query('DELETE FROM clients WHERE id = '.$_GET['id']);

				header('location:index.php');

			}else {

				header('location:index.php');

			}

			
		}

	}else {

		header('location:index.php');
	}

	

