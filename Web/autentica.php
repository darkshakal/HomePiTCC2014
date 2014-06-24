<?php
session_start();

if((!isset ($_SESSION['username']) == true) and (!isset ($_SESSION['userID']) == true))
{
	unset($_SESSION['username']);
	unset($_SESSION['userID']);
	header('location:index.php');
}
else
{
$MySQLUsername = "root";
$MySQLPassword = "mestre";

$MySQLHost = "localhost";
$MySQLDB = "gpio";

$dbConnection = mysql_connect($MySQLHost, $MySQLUsername, $MySQLPassword);
mysql_select_db($MySQLDB, $dbConnection);
}
?>