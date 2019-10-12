<?php
	if(isset($_POST['submit']))
	{
		$uname = $_POST['uname'];
		$pswd = $_POST['pswd']; 
		if($uname == 'admin' && $pswd == '123')
		{
			session_start();
			$_SESSION['uname'] = $uname;
			$token = bin2hex(random_bytes(32));
			setcookie("csrf_token", $token, time() + 86400, "/"); 
			header('Location: home.html');

		}
		else
			header('Location: index.html');
	}	
?>
