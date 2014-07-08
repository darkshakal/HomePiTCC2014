<?php

require_once "autentica.php";

	print '
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home Pi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

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
<div class="container" style="padding:2px">
<div class="panel panel-primary" style="border-color: #000">
<div class="panel-heading" style="background:#000"><span class="label label-default" style="background-color: #fff;color:#000"> / Home &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
  <div class="panel-body" style="margin-left:15px;margin-top:20px;margin-bottom:20px;margin-right:15px;padding:0px">
  
  	<div class="row"> 
        <div class="col-md-1 col-xs-6 column">
		 <a href="advanced.php">
			<img class="img-thumbnail"   src="img/main/settings128.png" /></a>
                         <br><div class="text" style="font-size:11;color:#000"><center><b>Configuracoes<center></b></div>
		</div>
                
	<div class="col-md-1 col-xs-6 column">
		<a href="garage.php">
			<img class="img-thumbnail"   src="img/main/garage128.png" /></a>
                        <br><div class="text" style="font-size:11;color:#000"><center><b>Garagem<center></b></div>
		</div>
	</div>
        <br>
	<div class="row">
		<div class="col-md-1 col-xs-6 column">
		<a href="alarm.php">
			<img class="img-thumbnail"   src="img/main/alarm128.png" /></a>
                        <br><div class="text" style="font-size:11;color:#000"><center><b>Alarme<center></b></div>
		</div>
		<div class="col-md-1 col-xs-6 column">
		<a href="fan.php">
			<img class="img-thumbnail"   src="img/main/fan128.png" /></a>
                        <br><div class="text" style="font-size:11;color:#000"><center><b>Climatizador<center></b></div>
		</div>
	</div>
        <br>
	<div class="row">
		<div class="col-md-1 col-xs-6 column">
		<a href="lights.php">
			<img class="img-thumbnail"   src="img/main/light128.png" /></a>
                        <br><div class="text" style="font-size:11;color:#000"><center><b>Iluminacao<center></b></div>
		</div>
		<div class="col-md-1 col-xs-6 column">
		<a href="energy.php">
			<img class="img-thumbnail"   src="img/main/energy128.png" /></a>
                        <br><div class="text" style="font-size:11;color:#000"><center><b>Consumo<center></b></div>
		</div>
	</div>
        <br>
	<div class="row">
		<div class="col-md-1 col-xs-6 column">
		<a href="temperature.php">
			<img class="img-thumbnail"   src="img/main/temperature128.png" /></a>
                        <br><div class="text" style="font-size:11;color:#000"><center><b>Temperatura<center></b></div>
		</div>
		<div class="col-md-1 col-xs-6 column">
		<a href="mail.php">
			<img class="img-thumbnail"   src="img/main/mail128.png" /></a>
                        <br><div class="text" style="font-size:11;color:#000"><center><b>E-mail<center></b></div>
		</div>
	</div>
        <br>
        <div class="row">
		<div class="col-md-1 col-xs-6 column">
		<a href="logs.php">
			<img class="img-thumbnail"   src="img/main/log128.png" /></a>
                        <br><div class="text" style="font-size:11;color:#000"><center><b>Logs<center></b></div>
		</div>
		<div class="col-md-1 col-xs-6 column">
		<a href="logoff.php">
			<img class="img-thumbnail"   src="img/main/logoff128.png" /></a>
                        <br><div class="text" style="font-size:11;color:#000"><center><b>Sair<center></b></div>
		</div>
	</div>
	
  </div>
</div>

</div>
</body>
</html>';	


?>