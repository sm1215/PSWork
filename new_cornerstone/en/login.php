<?php

	require_once 'functions.php';

	if($_POST['submitted']){
		if($_POST['username'])
			$temp_username = htmlspecialchars($_POST['username']);
		else
			$error_msg[] = "Please enter a username";

		if($_POST['password'])
			$temp_password = htmlspecialchars($_POST['password']);
		else
			$error_msg[] = "Please enter a password";

		if($temp_username != "" && $temp_password != ""){
			$username = filter_var($temp_username, FILTER_SANITIZE_STRING);
			$password = filter_var($temp_password, FILTER_SANITIZE_STRING);

			if(check_login($username, $password) != true){
				$error_msg[] = "Incorrect username and/or password";
			}
		}
	}

	require_once 'header.php';
?>

<div id="main">
	<div class="col-280 login">
		<form name="login" method="POST" action="login.php">
			<table>
				<tr class="header">
					<td colspan="2"><label>Please login below</label></td>
				</tr>
				<tr>
					<td><label for="username">Username </label></td>
					<td><input name="username" type="input" maxlength="25" value="<?php if($_POST['username']) echo $_POST['username'];?>" /></td>
				</tr>
				<tr>
					<td><label for="password">Password </label></td>
					<td><input name="password" type="password" maxlength="25" /></td>
				</tr>
				<tr>
					<td><input type="hidden" name="submitted" value="submitted"/></td>
					<td><input class="submit" type="submit" name="submit" value="Login"/></td>
				</tr>
				<?php if($error_msg){
						foreach($error_msg as $msg): ?>
					<tr>
						<td colspan="2"><label class="error"><img src="images/error.png" height="10" width="10" alt="error" /> <?php echo $msg; ?></label></td>
					</tr>
					<?php endforeach;} ?>
			</table>
		</form>
	</div>
</div>

<?php //require_once 'footer.php'; ?>