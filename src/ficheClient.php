<?php

	require_once '../admin/database.php';
	require_once 'function.php';

	$client = getClient($db,1, $_GET['id']);

	include('ficheClient.phtml');

?>