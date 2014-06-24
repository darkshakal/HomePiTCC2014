<?php
session_start();
//////////////////////////////
// EDIT THESE TWO VARIABLES //
//////////////////////////////
$MySQLUsername = "root";
$MySQLPassword = "mestre";

$MySQLHost = "localhost";
$MySQLDB = "gpio";

$dbConnection = mysql_connect($MySQLHost, $MySQLUsername, $MySQLPassword);
mysql_select_db($MySQLDB, $dbConnection);

If ((isset($_POST['username'])) && (isset($_POST['password']))){
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$loginQuery = "SELECT UserID, password, salt FROM users WHERE username = '$username';";
	$loginResult = mysql_query($loginQuery);
	If (mysql_num_rows($loginResult) < 1){
		mysql_close();
		header('location: index.php?error=incorrectLogin');
	}
	$loginData = mysql_fetch_array($loginResult, MYSQL_ASSOC);
	$loginHash = hash('sha256', $loginData['salt'] . hash('sha256', $password));
	If ($loginHash != $loginData['password']){
		mysql_close();
		header('location: index.php?error=incorrectLogin');
	} else {
		session_regenerate_id();
		$_SESSION['username'] = "admin";
		$_SESSION['userID'] = "1";
		mysql_close();
		header('location: main.php');
}
}
?>