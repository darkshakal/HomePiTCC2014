<?php

require_once "autentica.php";

$data= date('Ymd');
$hora= date('Hi'); 

#if(isset($_POST['fanon']))
#{
#	mysql_query("UPDATE pinstatus set pinstatus = 1 where pin_num = 8;");
#}

#if(isset($_POST['fanoff']))
#{
#	mysql_query("UPDATE pinstatus set pinstatus = 0 where pin_num = 8;");
#}

#$query = "SELECT pinstatus FROM pinstatus where pin_num = 8;";
#$result = mysql_query($query); 
#$result2 = mysql_fetch_array($result, MYSQL_ASSOC);
#$status = $result2['pinstatus'];

$query = "SELECT * FROM temperature;";
$result = mysql_query($query); 
$result2 = mysql_fetch_array($result, MYSQL_ASSOC);
$temp_autom = $result2['temp_autom'];

if(isset($_POST['tempon']))
{
        if($temp_autom == 0)
        {
            mysql_query("UPDATE temperature SET temp_autom = 1");
            mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (21,$data,$hora);");
        }
}

if(isset($_POST['tempoff']))
{
        if($temp_autom == 1)
        {
            mysql_query("UPDATE temperature SET temp_autom = 0");
            mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (22,$data,$hora);");
        }
}

if(isset($_POST['tempset']))
{
        print '<script>alert("OK");</script>';
	$value = $_POST['tempset'];
        $value = $value * 1000;
	mysql_query("UPDATE temperature SET temp_set = '$value'");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (26,$data,$hora);");
	header('Location: temperature.php');	
}

$query = "SELECT * FROM temperature;";
$result = mysql_query($query); 
$result2 = mysql_fetch_array($result, MYSQL_ASSOC);
$temp_autom = $result2['temp_autom'];
$temp_set = $result2['temp_set'];
$temp_read = $result2['temp_read'];
mysql_close();

print '
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home Pi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content=""><meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="60">

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
        function autoON()
        {
        document.temp_on.submit();
        }
        
        function autoOFF()
        {
        document.temp_off.submit();
        }
        
        function setaTEMP()
        {
            var valor;
            valor = document.getElementById("tempset").value;
                if(valor > 10 && valor < 40)
                {
                    alert("Temperature alterada com sucesso!");
                    document.temperature.submit();
                }
                else
                    alert("Temperatura deve estar entre 10 e 40 graus.");
        }
        </script>

        

</head>

<body style="background-color:#888">

<div class="container" style="padding:2px">
<div class="panel panel-primary" style="border-color: #000">
<div class="panel-heading" style="background:#000"><span class="label label-default" style="background-color: #fff;color:#000"> / Inicio / Temperatura e Climatizacao &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>
<div class="panel-body">
<div class="row">
   
<ul class="nav nav-tabs">
<li class="active"><a href="#"><span class="glyphicon glyphicon-refresh"></span>
<b>  Abrir - Fechar</b></a>
</li>
<li><a href="#"> </a></li>
</ul>
<center>
 <br>

<br>
<ul class="list-group">
  <li class="list-group-item">
  <b>Controle de Climatiza&ccedil;&atilde;o</b>
     <div class="pull-right">
    <span class="label label-primary" style="font-size:100%">
    ';
if ($temp_autom == 1)
    echo "AUTOMATICO";
else
    echo "MANUAL";
print'
    </span></div>
    
  </li>
</ul>					
';

if($temp_autom == 1)
{
                                               				
print'<br>
<ul class="list-group">
  <li class="list-group-item">
  <b>Temperatura Atual</b>
     <div class="pull-right">
    <span class="label label-primary" style="font-size:100%">
    ';
    echo round(($temp_read/1000),2)."&ordm;C";
print'
    </span></div>
    
  </li>
</ul>			
                                                
<br>
<ul class="list-group">
  <li class="list-group-item">
  <b>Temperatura de Acionamento</b>
    <div class="pull-right">
    <span class="label label-primary" style="font-size:100%">
    ';
    echo round(($temp_set/1000),2)." &ordm;C";
print'
    </span></div>
    
  </li>
</ul>			

<form role="form" name="temperature" action="temperature.php" method="post">
<h5 style="margin-top: 0;color:#777"> Setar nova temperatura: </h5>
<input type="hidden" name="teste" value="teste">
<div class="row">
<div class="input-group"><center>
<span class="input-group-btn">
<input type="text" class="form-control" placeholder="00.00" style="width: 100px;text-align: center" name="tempset" id="tempset">
<button class="btn btn-default" OnClick="setaTEMP()">Enviar</button>
</span>
</div>
</div>
</form>
                                                
';
}
else
{
print'<br>
<ul class="list-group">
  <li class="list-group-item">
  <b>Temperatura Atual</b>
       <div class="pull-right">
    <span class="label label-primary" style="font-size:100%">
    ';
    echo ($temp_read/1000)."&ordm;C";
print'
    </span></div>
    
  </li>
</ul>';
}                                   
                                                
print'
<form role="form" name="temp_on" action="temperature.php" method="post">
<input type="hidden" name="tempon" value="tempon">
</form>				
						
<form role="form" name="temp_off" action="temperature.php" method="post">
<input type="hidden" name="tempoff" value="tempoff">
</form>	
<div class="btn-group">
<button class="btn btn-sm btn-default" OnClick="autoOFF()">Manual</button>
<button class="btn btn-sm btn-default" OnClick="autoON()">Automatico</button></div>
<br><br>';
						
print'
						
<a href="main.php"> Voltar</a>

	

</div>		
</div>
</div>		
</div>
</div>		
	
</body>
</html>	';	


?>