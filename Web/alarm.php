<?php

require_once "autentica.php";

$data= date('Ymd');
$hora= date('Hi'); 


$query = "SELECT * FROM alarm;";
$result = mysql_query($query); 
$result2 = mysql_fetch_array($result, MYSQL_ASSOC);
$alarm_set = $result2['alarm_set'];

if(isset($_POST['alarmon']))
{
        if($alarm_set == 0)
        {
            mysql_query("UPDATE alarm set alarm_set = 1");
            mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (23,$data,$hora);");
        }
}

if(isset($_POST['alarmoff']))
{
        if($alarm_set == 1)
        {
            mysql_query("UPDATE alarm set alarm_set = 0");
            mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (24,$data,$hora);");
        }
}

if(isset($_POST['alarmclear']))
{
	mysql_query("UPDATE alarm set alarm_clear = 1");
        mysql_query("UPDATE alarm set alarm_flag = 0");
        
}

$query = "SELECT * FROM alarm;";
$result = mysql_query($query); 
$result2 = mysql_fetch_array($result, MYSQL_ASSOC);
$alarm_set = $result2['alarm_set'];
$alarm_clear = $result2['alarm_clear'];
$alarm_flag = $result2['alarm_flag'];

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
        document.alarm_on.submit();
        }
        
        function enviaOFF()
        {
        document.alarm_off.submit();
        }
        
        function enviaCLEAR()
        {
        document.alarm_clear.submit();
        document.reload();
        }
        </script>
</head>

<body style="background-color:#888">

<div class="container" style="padding:2px">
<div class="panel panel-primary" style="border-color: #000">
<div class="panel-heading" style="background:#000"><span class="label label-default" style="background-color: #fff;color:#000"> / Inicio / Alarme &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>
<div class="panel-body">
<div class="row">
   
<ul class="nav nav-tabs">
<li class="active"><a href="#"><span class="glyphicon glyphicon-refresh"></span>
<b>  Ativar - Desativar</b></a>
</li>
<li><a href="#"> </a></li>
</ul>
<center>';

print'<br><br>
<ul class="list-group">
  <li class="list-group-item">
  <b>Status do Alarme</b>
    <div class="pull-right">
    <span class="label label-primary" style="font-size:100%">
    ';
if ($alarm_set == 1)
    echo "HABILITADO";
else
    echo "DESABILITADO";
print'
    </span></div>
    
  </li>
</ul>					
<br>
';	

if ($alarm_set == 1)
{
    
print'

<ul class="list-group">
  <li class="list-group-item">
  <b>Evento de Alarme Ocorrido</b>
  <div class="pull-right">
    <span class="label label-primary" style="font-size:100%">
    ';
if ($alarm_flag == 1)
    echo "SIM";
else
    echo "NAO";
print'
    </span></div>
    
  </li>
</ul>	';


if($alarm_flag == 1)
{
							
print'
                                                   						
<form role="form" name="alarm_clear" action="alarm.php" method="post">
<input type="hidden" name="alarmclear" value="alarmclear">
</form>	
                                                
<br>
                                                    
<button class="btn btn-sm btn-default" OnClick="enviaCLEAR()">Limpar Evento</button>
<br><br><h5 style="margin-top: 0;color:#777">Ocorreu um evento de alarme em ';

echo date('d.m.Y H:i');
    
    print'. <br>
Favor limpar evento no botao acima e verificar sua causa.</h5>
';			
}
                                         
}

if($alarm_flag == 0)
{
print'
					
<br>
						
<form role="form" name="alarm_on" action="alarm.php" method="post">
<input type="hidden" name="alarmon" value="alarmon">
</form>				
						
<form role="form" name="alarm_off" action="alarm.php" method="post">
<input type="hidden" name="alarmoff" value="alarmoff">
</form>				
<div class="btn-group">
<button class="btn btn-sm btn-default" OnClick="enviaON()">Ligar</button>
<button class="btn btn-sm btn-default" OnClick="enviaOFF()">Desligar</button></div>

<br><br><br>
						
';
}
						
print'
<br>					
<a href="main.php"> Voltar</a>
</center>
</div>
</div>	
</div>

</div>		
</div>

</div>		
</div>
</div>		
	
</body>
</html>	';	


?>