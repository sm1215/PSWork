<?php //authenticate.php
		
	//Cookies and Session Controls
	if(isset($_COOKIE['username']))
		$username = $_COOKIE['username'];
	elseif(isset($_SESSION['username']))
		$username = $_SESSION['username'];
	else
		header('Location: login.php');
	

?>