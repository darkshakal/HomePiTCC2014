<?php

session_start();

session_destroy();
//////////////////////////////
// EDIT THESE TWO VARIABLES //
//////////////////////////////
$MySQLUsername = "root";
$MySQLPassword = "mestre";

/////////////////////////////////
// DO NOT EDIT BELOW THIS LINE //
/////////////////////////////////
$MySQLHost = "localhost";
$MySQLDB = "gpio";

If (($MySQLUsername == "USERNAME HERE") || ($MySQLPassword == "PASSWORD HERE")){
	print 'ERROR - Please set up the script first';
	exit();
}

$dbConnection = mysql_connect($MySQLHost, $MySQLUsername, $MySQLPassword);
mysql_select_db($MySQLDB, $dbConnection);

If (isset($_GET['action'])){
	If ($_GET['action'] == "logout"){
		$_SESSION = array();
		session_destroy();
		header('Location: index.php');
	}
}

If ((!isset($_SESSION['username'])) || (!isset($_SESSION['userID']))){
	print '
	<html>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>Home Pi - Login Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	</head>
	<body>

<div class="container" style="padding:2px">
<div class="panel panel-primary" style="border-color: #000">
<div class="panel-heading" style="background:#000"><span class="label label-default" style="background-color: #fff;color:#000"> / Login </span></div>
<div class="panel-body">
<div class="row">
		<div class="col-md-4 column">    <form class="form-signin" role="form" name="login" action="index2.php" method="post">
                <br>
        <h2 class="form-signin-heading" align="center">HomePi Login</h2>
        <br><br>
		<input class="form-control" placeholder="Usuario" required="" type="login" name="username">
        <input class="form-control" placeholder="Senha" required="" type="password" name="password">
        <br><br>
         <button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button><br><br>
      </form>
</div> <!-- /container -->
</div>
</div>
</div>
</div>
	
	</body>
	</html>
	';
	die();
}
?>