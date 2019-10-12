<?php
	session_start();
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$csrf_token = $_POST['csrf_token'];
	
	echo "Welcome $firstname $lastname<br/>";
	if(isset($_COOKIE["csrf_token"]) && $csrf_token == $_COOKIE["csrf_token"])
	{
		echo "CSRF token matched";
	}
	else
	{
		echo "CSRF token not matched";
	}

?>