<?php

require_once 'functions.php';
$webpath = "http://localhost/new_cornerstone/en/";
session_start();
if($_SESSION['username']) $username = $_SESSION['username'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<!--
TODO: Evaluate whether these are still needed... wasteful on bandwidth and time consuming
<meta http-equiv="cache-control" content="no-store, no-cache, must-revalidate" />
<meta http-equiv="Pragma" content="no-store, no-cache" />
<meta http-equiv="Expires" content="0" />
END TODO;
-->
<!--
TODO: Include Lightbox support at a later stage
<script src='../js/jquery-1.7.2.min.js'></script>
<script src='../js/lightbox.js'></script>
<link rel='stylesheet' type='text/css' href='../css/lightbox.css' />
END TODO;
-->
<link rel='stylesheet' type='text/css' href='reset-styles.css' />
<link rel='stylesheet' type='text/css' href='styles.css' />
<title>Trek Cornerstone</title>
</head>
<div id='wrapper'>
	<div id='header'>
		<a class="logo" href="#"><img  src='images/logo.png' /></a>
		<div id="header_controls">
			<ul class="user_controls">
				<li>Cart: [cart_quantity]</li>
				<?php if($username): ?>
					<li>Welcome, <?php echo $username; ?></li>
					<li><a href="logout.php">Logout</a></li>
				<?php else: ?>
					<li><img src="images/sign-in-icon.png"/><a href="login.php">Sign in</a></li>
				<?php endif; ?>
			<!--<li>[if_admin]<a href="#">Admin Section</a></li>-->
			</ul>
			<ul class="localization_controls">
				<li>
					Currency:
					<form name="currency" value="Currency">
						<select>
							<option value="usd">USD $</option>
							<option value="cad">CAD $</option>
							<option value="aus">AUS $</option>
							<option value="gbp">GBP £</option>
						</select>
					</form>
				</li>
				
				<li>Lanauge: 
					<form name="currency" value="Currency">
						<select>
							<option value="english">English</option>
							<option value="french">François</option>
							<option value="spanish">Español</option>
							<option value="norwegian">Norsk</option>
						</select>
					</form>
				</li>
				<!--<li><a href="#">Contact us</a></li>-->
			</ul>
		</div>
		
	</div>

