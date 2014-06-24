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
        <script>
        function enviaON()
        {
        document.fan_on.submit();
        }
        
        function enviaOFF()
        {
        document.fan_off.submit();
        }
        </script>
</head>

<body style="background-color:#888">

<div class="container" style="padding:2px">
<div class="panel panel-primary" style="border-color: #000">
<div class="panel-heading" style="background:#000"><span class="label label-default" style="background-color: #fff;color:#000"> / Inicio / Sobre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>
<div class="panel-body">
<div class="row">
   
<ul class="nav nav-tabs">
<li class="active"><a href="#"><span class="glyphicon glyphicon-info-sign"></span>
<b>  Informa&ccedil;&otilde;es</b></a>
</li>
<li><a href="#"> </a></li>
</ul>
<center>
<br>
<h2 style="margin-top: 0;color:#777">HomePi</h2>
<br>
<h4 style="margin-top: 0;color:#777">Sistema de Automa&ccedil;&atilde;o Residencial</h4>

<br>
<h5 style="margin-top: 0;color:#777">Projeto desenvolvido como Trabalho de Conclus&atilde;o de Curso da Faculdade de Engenharia Eletrica - PUCRS
<br><br><b> Ano:</b> 2014
<br><b> Autor:</b> Vagner Fritsch de Lima
</h5>

<br>
                                                
<a href="main.php"> Voltar</a>
<br>

</center>
</div>
</div>		
</div>
</div>		
</div>		










';	


?>