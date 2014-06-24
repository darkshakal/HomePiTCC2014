<?php

require_once "autentica.php";

$data= date('Ymd');
$hora= date('Hi'); 


$query = "SELECT pinstatus FROM pinstatus where pin_num =18;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$bedroom = $result2['pinstatus'];

$query = "SELECT pinstatus FROM pinstatus where pin_num =23;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$kitchen = $result2['pinstatus'];

$query = "SELECT pinstatus FROM pinstatus where pin_num =24;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$restroom = $result2['pinstatus'];

$query = "SELECT pinstatus FROM pinstatus where pin_num =25;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$outside = $result2['pinstatus'];

if (isset($_POST['bedroomon'])) {
    
    if($bedroom == 0)
    {
        mysql_query("UPDATE pinstatus set pinstatus = 1 where pin_num = 18");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (1,$data,$hora);");
    }
}

if (isset($_POST['bedroomoff'])) {
    if($bedroom == 1)
    {
        mysql_query("UPDATE pinstatus set pinstatus = 0 where pin_num = 18");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (2,$data,$hora);");
    }
}

if (isset($_POST['kitchenon'])) {
    if($kitchen == 0)
    {
        mysql_query("UPDATE pinstatus set pinstatus = 1 where pin_num = 23");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (3,$data,$hora);");
    }
}

if (isset($_POST['kitchenoff'])) {
    if($kitchen == 1)
    {
        mysql_query("UPDATE pinstatus set pinstatus = 0 where pin_num = 23");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (4,$data,$hora);");
    }
}

if (isset($_POST['restroomon'])) {
    if($restroom== 0)
    {
        mysql_query("UPDATE pinstatus set pinstatus = 1 where pin_num = 24");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (5,$data,$hora);");
    }
}

if (isset($_POST['restroomoff'])) {
    if($restroom== 1)
    {
        mysql_query("UPDATE pinstatus set pinstatus = 0 where pin_num = 24");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (6,$data,$hora);");
    }
}

if (isset($_POST['outsideon'])) {
    if($outside == 0)
    {
        mysql_query("UPDATE pinstatus set pinstatus = 1 where pin_num = 25");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (7,$data,$hora);");
    }
}

if (isset($_POST['outsideoff'])) {
    if($outside == 1)
    {    
        mysql_query("UPDATE pinstatus set pinstatus = 0 where pin_num = 25");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (8,$data,$hora);");
    }
}

$query = "SELECT pinstatus FROM pinstatus where pin_num =18;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$bedroom = $result2['pinstatus'];

$query = "SELECT pinstatus FROM pinstatus where pin_num =23;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$kitchen = $result2['pinstatus'];

$query = "SELECT pinstatus FROM pinstatus where pin_num =24;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$restroom = $result2['pinstatus'];

$query = "SELECT pinstatus FROM pinstatus where pin_num =25;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$outside = $result2['pinstatus'];

$query = "SELECT ilumi_auto FROM ilumi where ilumi_id = 1;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$bedauto = $result2['ilumi_auto'];

$query = "SELECT ilumi_auto FROM ilumi where ilumi_id = 2;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$kitauto = $result2['ilumi_auto'];

$query = "SELECT ilumi_auto FROM ilumi where ilumi_id = 3;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$resauto = $result2['ilumi_auto'];

$query = "SELECT ilumi_auto FROM ilumi where ilumi_id = 4;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$outauto = $result2['ilumi_auto'];

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
        function bedroomON()
        {
        document.bedroom_on.submit();
        }
        
        function bedroomOFF()
        {
        document.bedroom_off.submit();
        }
        
        function kitchenON()
        {
        document.kitchen_on.submit();
        }
        
        function kitchenOFF()
        {
        document.kitchen_off.submit();
        }
   
        function restroomON()
        {
        document.restroom_on.submit();
        }
        
        function restroomOFF()
        {
        document.restroom_off.submit();
        }
        
        function outsideON()
        {
        document.outside_on.submit();
        }
        
        function outsideOFF()
        {
        document.outside_off.submit();
        }

         </script>
</head>

<body style="background-color:#888">

<div class="container" style="padding:2px">
<div class="panel panel-primary" style="border-color: #000">
<div class="panel-heading" style="background:#000"><span class="label label-default" style="background-color: #fff;color:#000"> / Inicio / Iluminacao &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>
<div class="panel-body">
<div class="row">
   
<ul class="nav nav-tabs">
<li class="active"><a href="#"><span class="glyphicon glyphicon-refresh"></span>
<b>  Ligar - Desligar - Automatizar</b></a>
</li>
<li><a href="#"> </a></li>
</ul>
<center>
<br>
                                                   
<div class="row"> 
<div class="col-md-3 col-xs-6 column">        
<ul class="list-group">
  <li class="list-group-item">
  <b>Quarto</b><div class="pull-right">
    <span class="label label-primary" style="font-size:100%">
    ';
if ($bedroom == 1)
    echo "ON";
else
    echo "OFF";
print'
    </span></div>
    
  </li>
</ul>
<form role="form" name="bedroom_on" action="lights.php" method="post">
<input type="hidden" name="bedroomon" value="bedroomon">
</form>	
						
<form role="form" name="bedroom_off" action="lights.php" method="post">
<input type="hidden" name="bedroomoff" value="bedroomoff">
</form>				
                                               
<div class="btn-group">';

if($bedauto == 1)
{
     print'
    <button class="btn btn-sm btn-default" OnClick="#">Autom&aacute;tico</button>';
}
else
{
    print'
   <button class="btn btn-sm btn-default" OnClick="bedroomON()">ON</button>
    <button class="btn btn-sm btn-default" OnClick="bedroomOFF()">OFF</button>';
}
print'
<a href="lights_auto.php" class="btn btn-sm btn-warning"> CFG </a>
</div>
                                                ';

print'<br><br>
<ul class="list-group">
  <li class="list-group-item">
  <b>Cozinha</b><div class="pull-right">
    <span class="label label-primary" style="font-size:100%">
    ';
if ($kitchen == 1)
    echo "ON";
else
    echo "OFF";
print'
    </span></div>
    
  </li>
</ul>
					
<form role="form" name="kitchen_on" action="lights.php" method="post">
<input type="hidden" name="kitchenon" value="kitchen">
</form>				
		
<form role="form" name="kitchen_off" action="lights.php" method="post">
<input type="hidden" name="kitchenoff" value="kitchenoff">
</form>				
<div class="btn-group">
';

if($kitauto == 1)
{
     print'
    <button class="btn btn-sm btn-default" OnClick="#">Autom&aacute;tico</button>';
}
else
{
    print'
    <button class="btn btn-sm btn-default" OnClick="kitchenON()">ON</button>
    <button class="btn btn-sm btn-default" OnClick="kitchenOFF()">OFF</button>';   
}

print'
<a href="lights_auto.php" class="btn btn-sm btn-warning"> CFG </a>
</div>
<br>
</div>
';


print'<div class="col-md-3 col-xs-6 column">';

print'
<ul class="list-group">
  <li class="list-group-item">
  <b>Sala</b><div class="pull-right">
    <span class="label label-primary" style="font-size:100%">
    ';
if ($restroom == 1)
    echo "ON";
else
    echo "OFF";
print'
    </span></div>
    
  </li>
</ul>
					
<form role="form" name="restroom_on" action="lights.php" method="post">
<input type="hidden" name="restroomon" value="restroomon">
</form>				
						
<form role="form" name="restroom_off" action="lights.php" method="post">
<input type="hidden" name="restroomoff" value="restroomoff">
</form>				
<div class="btn-group">';


if($resauto == 1)
{
     print'
    <button class="btn btn-sm btn-default" OnClick="#">Autom&aacute;tico</button>';
}
else
{
    print'
    <button class="btn btn-sm btn-default" OnClick="restroomON()">ON</button>
    <button class="btn btn-sm btn-default" OnClick="restroomOFF()">OFF</button>';
}

print'
<a href="lights_auto.php" class="btn btn-sm btn-warning"> CFG </a>
</div>
<br>

';


print'<br>
<ul class="list-group">
  <li class="list-group-item">
  <b>Rua</b><div class="pull-right">
    <span class="label label-primary" style="font-size:100%">
    ';
if ($outside == 1)
    echo "ON";
else
    echo "OFF";
print'
    </span></div>
    
  </li>
</ul>					
<form role="form" name="outside_on" action="lights.php" method="post">
<input type="hidden" name="outsideon" value="outsideon">
</form>				
				
<form role="form" name="outside_off" action="lights.php" method="post">
<input type="hidden" name="outsideoff" value="outsideoff">
</form>				
<div class="btn-group">';

if($outauto == 1)
{
     print'
    <button class="btn btn-sm btn-default" OnClick="#">Autom&aacute;tico</button>';
}
else
{
    print'
    <button class="btn btn-sm btn-default" OnClick="outsideON()">ON</button>
<button class="btn btn-sm btn-default" OnClick="outsideOFF()">OFF</button>';
}
print'
<a href="lights_auto.php" class="btn btn-sm btn-warning"> CFG </a>
</div>
<br>
</div>

';
print'</div>';
print'
<br><br>
<a href="main.php"> Voltar</a>
</center>
</div>		
</div>
</div>		
</div>
</div>		
	
</body>
</html>	';
?>