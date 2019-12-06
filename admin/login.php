<?php
	session_start();

		require_once 'database.php';
		include ('login.phtml');

		if (isset($_POST) AND !empty($_POST)) {

			if(!empty(htmlspecialchars($_POST['username'])) AND !empty(htmlspecialchars($_POST['password']))) {

				$req = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');

				$req->execute([

					'username' => $_POST['username'],

					'password' => $_POST['password']

				]);


				$user = $req->fetchObject();


				if($user) {

					$_SESSION['admin'] = $_POST['username'];

					header('location:home.php');

				}else{

					echo "<span class='alert alert-danger'>Identifiants incorrect !</span>";
					
				}

			}

			else {

				echo "<span class='alert alert-danger'>Veuillez compléter tous les champs !</span>";


			}	

		}

		if (isset($error)) {

			echo $error;

		}

		