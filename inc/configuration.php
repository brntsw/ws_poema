<?php

	session_start();

	setlocale(LC_ALL,null);
	setlocale(LC_ALL,"pt_BR");

	function get($x){
	    return trim(str_replace("'", "", $_GET[$x]));
	}

	function post($x){
	    return trim(str_replace("'", "", $_POST[$x]));
	}

	function __autoload($classname){
	    require_once $_SERVER['DOCUMENT_ROOT']."/ws_student_guardian/class/$classname.class.php";
	}

?>