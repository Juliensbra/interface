<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BackOff</title>
	<link href="https://fonts.googleapis.com/css?family=Crete+Round&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body class="accueil">

	<?php

		require_once 'database.php';

		if(!$_SESSION['admin']) {

			header('location:login.php');
			exit();

		}

	?>

			<main class="principal">

				<div class="logoLogo">

					<img src="../img/ordi.png" alt="logo pc">

				</div>

				<h3>Bonjour <?= $_SESSION['admin'] ?> bienvenue sur le back-office</h3>

				<nav>

					<ul>

						<li><a href="../src/index.php" class="couleur">Cliquez-ici</a> pour accéder au tableau info clients</li>

						<li>Sinon <a href="logOut.php" class="couleur"> Cliquez-ici</a> pour vous deconnecter</li>

					</ul>

				</nav>

			</main>

</body>
<footer class="pied">
	
</footer>
</html>