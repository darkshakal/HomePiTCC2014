<?php

require_once "autentica.php";

If (isset($_POST['action'])){
	If ($_POST['action'] == "setPassword"){
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];
		If ($password1 != $password2){
			header('Location: advanced.php?msg=1');
		}
		$password = mysql_real_escape_string($_POST['password1']);
		If (strlen($password) > 28){
			mysql_close();
			header('location: advanced.php?msg=2');
		}
		$resetQuery = "SELECT username, salt FROM users WHERE username = 'admin';";
		$resetResult = mysql_query($resetQuery);
		If (mysql_num_rows($resetResult) < 1){
			mysql_close();
			header('location: advanced.php?msg=3');
		}
		$resetData = mysql_fetch_array($resetResult, MYSQL_ASSOC);
		$hash = hash('sha256', $password);
		function createSalt(){
			$string = md5(uniqid(rand(), true));
			return substr($string, 0, 8);
		}
		
		If ($password1 == $password2){
		$salt = createSalt();
		$hash = hash('sha256', $salt . $hash);
		mysql_query("UPDATE users SET salt='$salt' WHERE username='admin'");
		mysql_query("UPDATE users SET password='$hash' WHERE username='admin'");
		mysql_close();
		header('location: advanced.php?msg=4');
		
	}
}
}







?>