<?php

require_once "autentica.php";

$data= date('Ymd');
$hora= date('Hi'); 


$query = "SELECT pinstatus FROM pinstatus where pin_num = 8;";
$result = mysql_query($query); 
$result2 = mysql_fetch_array($result, MYSQL_ASSOC);
$status = $result2['pinstatus'];

if(isset($_POST['fanon']))
{
    	if($status == 0)
        {
            mysql_query("UPDATE pinstatus SET pinstatus = 1 where pin_num = 8;");
            mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (11,$data,$hora);");
        }
}

if(isset($_POST['fanoff']))
{
        if($status == 1)
        {
            mysql_query("UPDATE pinstatus SET pinstatus = 0 where pin_num = 8;");
            mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (12,$data,$hora);");
        }
}

$query = "SELECT pinstatus FROM pinstatus where pin_num = 8;";
$result = mysql_query($query); 
$result2 = mysql_fetch_array($result, MYSQL_ASSOC);
$status = $result2['pinstatus'];

$query = "SELECT * FROM temperature;";
$result = mysql_query($query); 
$result2 = mysql_fetch_array($result, MYSQL_ASSOC);
$temp_autom = $result2['temp_autom'];

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
<div class="panel-heading" style="background:#000"><span class="label label-default" style="background-color: #fff;color:#000"> / Inicio / Climatizacao &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>
<div class="panel-body">
<div class="row">
   
<ul class="nav nav-tabs">
<li class="active"><a href="#"><span class="glyphicon glyphicon-refresh"></span>
<b>  Ligar - Desligar</b></a>
</li>
<li><a href="#"> </a></li>
</ul>
<center>
                                                 <br>';
print'<br>
<ul class="list-group">
  <li class="list-group-item">
  <b>Climatizador</b><div class="pull-right">
    <span class="label label-primary" style="font-size:100%">
    ';
if ($status == 1)
    echo "ON";
else
    echo "OFF";
print'
    </span></div>
    
  </li>
</ul>					
<br>
';
						
if(!$temp_autom)
{
		
print'
						
<form role="form" name="fan_on" action="fan.php" method="post">
<input type="hidden" name="fanon" value="fanon">
</form>				
						
<form role="form" name="fan_off" action="fan.php" method="post">
<input type="hidden" name="fanoff" value="fanoff">
</form>	
<div class="btn-group">
<button class="btn btn-sm btn-default" OnClick="enviaON()">Ligar</button>
<button class="btn btn-sm btn-default" OnClick="enviaOFF()">Desligar</button></div>

<br><br> <br> <br>     ';


}
else
{
print'
<br>
<div class="alert alert-warning">
<b>Controle do climatizador est&aacute; como Autom&aacute;tico.<br>
Para controle manual, alterar configura&ccedil;&otilde;es.</b>
</div>
';
}
						
print'
						
<br>
                                                
<a href="main.php"> Voltar</a>
<br>
<br>
					</center>
</div>
</div>		
</div>
</div>		
</div>		
		
	
</body>
</html>	';	


?>