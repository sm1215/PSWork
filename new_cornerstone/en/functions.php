<?php //functions.php

function get_webpath(){
	$webpath = "/new_cornerstone/en";
	return $webpath;
}


function check_login($username, $password){
	include("db_info.php");
	
	//connect to the database
	$mysqli = new mysqli($hname, $uname, $pass, $db);
	if($mysqli->connect_errorno){
		echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	}

	//set up query and use it
	$query = "SELECT username, password FROM users WHERE username = '$username'";
	
	if(!$result = $mysqli->query($query)){
		echo "Query Error: " . $mysqli->error;
	} else {
		//assign results
		while($row = $result->fetch_assoc()){
			$current_user['username'] = $row['username'];
			$current_user['password'] = $row['password'];
		}
		//free result set
		$result->free();
	}
	//close db connection
	$mysqli->close();

	//check for matches
	if($current_user['username'] == $username && $current_user['password'] == $password){
		//set session variables and redirect back to main page
		session_start();
		$_SESSION['username'] = $current_user['username'];
		$webpath = get_webpath();
		header("Location: $webpath/main.php");
		return TRUE;
	}
	else
		return FALSE;
}

function logout(){
	session_start();
	$_SESSION = array();
	if(session_id() != "" || isset($_COOKIE[session_name()]))
		setcookie(session_name(), '', time() - 2592000, '/');
	session_destroy();
}

?>