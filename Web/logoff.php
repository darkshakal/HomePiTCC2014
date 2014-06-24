<?php

require_once "autentica.php";
mysql_close();
	print '
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home Pi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content=""><meta name="viewport" content="width=device-width, initial-scale=1">
  

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</head>

<body style="background-color:#888">

<body>
<div class="container" style="padding:2px">
<div class="panel panel-primary" style="border-color: #000">
<div class="panel-heading" style="background:#000"><span class="label label-default" style="background-color: #fff;color:#000"> / Inicio / Logoff &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>
<div class="panel-body">
<div class="row">
   
<ul class="nav nav-tabs">
<li class="active"><a href="#"><span class="glyphicon glyphicon-log-out"></span>
<b>  Logoff </b></a>
</li>
<li><a href="#"> </a></li>
</ul>
<center>
        <br> <br>
	<h4 style="margin-top: 0;color:#000"> Deseja realmente sair?</h4><br><br><br>
	<a class="btn btn-sm btn-default" href="index.php?action=logout">Clique para sair</a><br><br><br><br><br>
	<a href="main.php">Voltar</a><br><br>
</center>
				

</div>		
</div>
</div>		
</div>
</div>		
	
</body>
</html>	';	


?>