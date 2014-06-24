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

if((!isset ($_SESSION['username']) == true) and (!isset ($_SESSION['userID']) == true))
{
	unset($_SESSION['username']);
	unset($_SESSION['userID']);
	header('location:index.php');
}
else
{
print'
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home Pi</title>HomePi - Change Pwd</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content=""><meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
	<center>
	 <h4 style="margin-top: 0;color:#55518a">Password Alterado com Sucesso!</h4>
	  <br><br>
	<a class="btn btn-lg btn-primary" href="main.php">Voltar</a>
	<center>
	</body>
</html>
	 ';
	 
	}



