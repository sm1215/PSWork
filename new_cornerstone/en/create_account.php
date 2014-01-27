<?php require_once 'header.php';
require_once 'functions.php'; 
require_once 'db_info.php';
require_once 'authenticate.php';

$submitted = $_POST['submitted'];

if($submitted == TRUE){
	echo "submitted == true";
	$mysqli = new mysqli($hname, $uname, $pass, $db);
	if($mysqli->connect_errorno)
		echo "Error, couldn't connect to database: " . $mysqli->connect_errorno;
	else
		echo "Connection successful";

	//check form input here before inserting to db
	$username = $_POST['username'];
	$password = $_POST['password'];

	echo "<br/> NAME: $username <br/> PASS: $password<br/>";

	$result = $mysqli->query(
		"INSERT INTO users (username, password)
		VALUES('$username', '$password')
		");
	if($mysqli->error)
		echo "Error adding entry to database: " . $mysqli->error ."<br/>";
}

?>

<div id="main">
	<form name="create_account" method="POST" action="create_account.php">
		<div class="form_row">
			<label for="username">Username:</label><input name="username" type="text"></input>
		</div>
		<div class="form_row">
			<label for="password">Password:</label><input name="password" type="password"></input>
		</div>
		<input type="hidden" name="submitted" value="true"/>
		<div class="form_submit">
			<input type="submit" name="submit" value="submit"/>
		</div>
	</form>
</div>

<?php require_once 'footer.php'; ?>