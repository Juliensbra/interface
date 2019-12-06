<?php
	session_start();
	// Suppression des variables de session et de la session
	$_SESSION = array();
	session_destroy();
	 
	// Suppression des cookies de connexion automatique
	setcookie('admin', '');
	setcookie('pass_hache', '');
	 
	 
	header('Location: home.php?deco=1');
 


