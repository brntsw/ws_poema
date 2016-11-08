<?php

	header('Content-Type: application/json');

	include_once($_SERVER['DOCUMENT_ROOT'] . '/inc/configuration.php');

	if(!empty($_SERVER['REQUEST_METHOD']) && strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
		$sql = new Sql;

		$data = file_get_contents('php://input');
		$json = json_decode($data);

		//Poemas
		$poemas = $sql->getPoems();

		echo "<pre>";
		print_r($poemas);
	}

?>