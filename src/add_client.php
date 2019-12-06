<?php
	session_start();

	include('add_client.phtml');
	require_once '../admin/database.php';
	require_once 'function.php';


	if (isset($_POST['ajouter'])) {
			
		$name = htmlspecialchars(trim($_POST['name']));
	
		$errors = [];

		if(empty($name)) {

			$errors['empty'] = "Veuillez remplir tous les champs";

		}



	if(!empty($errors)) {

?>

			<div class="card red">

				<div class="card-content">

					<?php

						foreach ($errors as $error) {
							
							echo $error;
						}

					?>

				</div>

			</div>
	<?php

	}else{

		addClient($name);
	}

	}

















