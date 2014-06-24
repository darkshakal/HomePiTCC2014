<?php

require_once "autentica.php";

$mes = date("m");


if(isset($_POST['quarto1']))
{
    $var=$_POST['quarto1'];
    mysql_query("UPDATE energy SET energy_base_value = '$var' WHERE energy_equip ='quarto'");
}

if(isset($_POST['cozinha1']))
{
    $var=$_POST['cozinha1'];
    mysql_query("UPDATE energy SET energy_base_value = '$var' WHERE energy_equip ='cozinha'");
}

if(isset($_POST['sala1']))
{
    $var=$_POST['sala1'];
    mysql_query("UPDATE energy SET energy_base_value = '$var' WHERE energy_equip ='sala'");
}

if(isset($_POST['rua1']))
{
    $var=$_POST['rua1'];
    mysql_query("UPDATE energy SET energy_base_value = '$var' WHERE energy_equip ='rua'");
}

if(isset($_POST['clima1']))
{
    $var=$_POST['clima1'];
    mysql_query("UPDATE energy SET energy_base_value = '$var' WHERE energy_equip ='climatizador'");
}

$query = "SELECT * FROM consum where consum_equip = 'quarto' and consum_month = '$mes';";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$bedc = $result2['consum_total'];

$query = "SELECT * FROM energy where  energy_equip = 'quarto';";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$bedb = $result2['energy_base_value'];

$query = "SELECT * FROM consum where consum_equip = 'cozinha' and consum_month = '$mes';";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$kitc = $result2['consum_total'];

$query = "SELECT * FROM energy where  energy_equip = 'cozinha';";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$kitb = $result2['energy_base_value'];

$query = "SELECT * FROM consum where consum_equip = 'sala' and consum_month = '$mes';";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$resc = $result2['consum_total'];

$query = "SELECT * FROM energy where  energy_equip = 'sala';";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$resb = $result2['energy_base_value'];

$query = "SELECT * FROM consum where consum_equip = 'rua' and consum_month = '$mes';";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$outc = $result2['consum_total'];

$query = "SELECT * FROM energy where  energy_equip = 'rua';";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$outb = $result2['energy_base_value'];

$query = "SELECT * FROM consum where consum_equip = 'climatizador' and consum_month = '$mes';";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$fanc = $result2['consum_total'];

$query = "SELECT * FROM energy where  energy_equip = 'climatizador';";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$fanb = $result2['energy_base_value'];

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
        function altQuarto()
        {

        var y=prompt("Entre com novo valor em Watts");
        if (y==null || y==0 || y<0)
        {
           alert("Valor nao pode ser zero ou negativo.");
        } 
        else
        {
            document.getElementById("quarto2").value=y;
            document.quarto.submit();
        }

        }
        
        function altCoz()
        {

        var y=prompt("Entre com novo valor em Watts");
        if (y==null || y==0 || y<0)
        {
           alert("Valor nao pode ser zero ou negativo.");
        } 
        else
        {
            document.getElementById("cozinha2").value=y;
            document.cozinha.submit();
        }

        }
        
        function altSal()
        {

        var y=prompt("Entre com novo valor em Watts");
        if (y==null || y==0 || y<0)
        {
           alert("Valor nao pode ser zero ou negativo.");
        } 
        else
        {
            document.getElementById("sala2").value=y;
            document.sala.submit();
        }

        }

        function altRua()
        {

        var y=prompt("Entre com novo valor em Watts");
        if (y==null || y==0 || y<0)
        {
           alert("Valor nao pode ser zero ou negativo.");
        } 
        else
        {
            document.getElementById("rua2").value=y;
            document.rua.submit();
        }

        }
        
        function altCli()
        {

        var y=prompt("Entre com novo valor em Watts");
        if (y==null || y==0 || y<0)
        {
           alert("Valor nao pode ser zero ou negativo.");
        } 
        else
        {
            document.getElementById("clima2").value=y;
            document.clima.submit();
        }

        }

        </script>
</head>

<body style="background-color:#888">

<div class="container" style="padding:2px">
<div class="panel panel-primary" style="border-color: #000">
<div class="panel-heading" style="background:#000"><span class="label label-default" style="background-color: #fff;color:#000"> / Inicio / Energia &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>
<div class="panel-body">
<div class="row">
   
<ul class="nav nav-tabs">
<li class="active"><a href="#"><span class="glyphicon glyphicon-flash"></span>
<b>  Consumo Mensal</b></a>
</li>
<li><a href="#"> </a></li>
</ul>
<center><br>';

print'
<div class="panel panel-primary">
  <div class="panel-heading">Consumo Acumulado Mensal</div>
  <table class="table">
  <div "row">
  <div class="col-md-3 col-xs-3 column">
  <b>Setor</b>
  </div>
  
  <div class="col-md-3 col-xs-3 column">
  <b>Acum(h)</b>
  </div>
  
  <div class="col-md-3 col-xs-3 column">
  <b>Base(W)</b>
  </div>  
  
  <div class="col-md-3 col-xs-3 column">
  <b>Tot(kWh)</b>
  </div>  

  <div "row">
  <div class="col-md-3 col-xs-3 column">
  Quarto
  </div>
  
  <div class="col-md-3 col-xs-3 column">
  ';
  echo round(($bedc/60),2);

  print'
  </div>
  
  <div class="col-md-3 col-xs-3 column">
  ';
  echo $bedb;
  
  print'
  </div>  

  <div class="col-md-3 col-xs-3 column">
  ';
  $kwhbed = round((($bedc/60)/1000)*$bedb,4);
  echo $kwhbed;
  
  
  print'
  </div>  

  <div "row">
  <div class="col-md-3 col-xs-3 column">
  Cozinha
  </div>
  
  <div class="col-md-3 col-xs-3 column">
  ';
  echo round(($kitc/60),2);
  
  print'
  </div>
  
  <div class="col-md-3 col-xs-3 column">
  ';
  echo $kitb;
  
  print'
  </div>  

  <div class="col-md-3 col-xs-3 column">
    ';
  $kwhkit = round((($kitc/60)/1000)*$kitb,4);
  echo $kwhkit;
  
  print'
  </div> 

  <div "row">
  <div class="col-md-3 col-xs-3 column">
  Sala
  </div>
  
  <div class="col-md-3 col-xs-3 column">
  ';
  echo round(($resc/60),2);

  print'
  </div>
  
  <div class="col-md-3 col-xs-3 column">
  ';
  echo $resb;

  print'
  </div>  

  <div class="col-md-3 col-xs-3 column">
    ';
  $kwhres = round((($resc/60)/1000)*$resb,4);
  echo $kwhres;
  
  print'
  </div> 

  <div "row">
  <div class="col-md-3 col-xs-3 column">
  Rua
  </div>
  
  <div class="col-md-3 col-xs-3 column">
  ';
  echo round(($outc/60),2);

  print'
  </div>
  
  <div class="col-md-3 col-xs-3 column">
   ';
  echo $outb;

  print'
  </div>  

  <div class="col-md-3 col-xs-3 column">
    ';
  $kwhout = round((($outc/60)/1000)*$outb,4);
  echo $kwhout;
  
  print'
  </div> 

  <div "row">
  <div class="col-md-3 col-xs-3 column">
  Climatizador
  </div>
  
  <div class="col-md-3 col-xs-3 column">
    ';
  echo round(($fanc/60),2);

  print'
  </div>
  
  <div class="col-md-3 col-xs-3 column">
    ';
  echo $fanb;

  print'
  </div>  

  <div class="col-md-3 col-xs-3 column">
   ';
  $kwhfan = round((($fanc/60)/1000)*$fanb,4);
  echo $kwhfan;
  
  print'
  </div> 
  
  </div>
    
  </table>
  
  <div "row" >
  <div class="col-md-3 col-xs-3 column">
  <b>Total</b>
  </div>
  <div class="col-md-3 col-xs-3 column"><b>';
  echo round(($bedc+$kitc+$resc+$outc+$fanc)/60,4);
  
  print'</b>
  </div>
  <div class="col-md-3 col-xs-3 column"><b>';
  
  echo round($bedb+$kitb+$resb+$outb+$fanb,4);
  
  print'</b>
  </div>
  <div class="col-md-3 col-xs-3 column"><b>';
  
  echo round(($kwhbed+$kwhfan+$kwhkit+$kwhout+$kwhres),4);
  
  print'
  </div></b>
  </div>
  <br>

</div>

';       
       
print'

  <form role="form" name="quarto" action="energy.php" method="post">
  <input type="hidden" name="quarto1" value="quarto1" id="quarto2">
  </form>				

  <form role="form" name="cozinha" action="energy.php" method="post">
  <input type="hidden" name="cozinha1" value="cozinha1" id="cozinha2">
  </form>				
  
  <form role="form" name="sala" action="energy.php" method="post">
  <input type="hidden" name="sala1" value="sala1" id="sala2">
  </form>				
  
  <form role="form" name="rua" action="energy.php" method="post">
  <input type="hidden" name="rua1" value="rua1" id="rua2">
  </form>				
  
  <form role="form" name="clima" action="energy.php" method="post">
  <input type="hidden" name="clima1" value="clima1" id="clima2">
  </form>				

 <div class="btn-group">
    <button class="btn btn-sm btn-default" disabled="disabled">Base(W)</button>
    <button class="btn btn-sm btn-default" OnClick="altQuarto()">Qua</button>
    <button class="btn btn-sm btn-default" OnClick="altCoz()">Coz</button>
    <button class="btn btn-sm btn-default" OnClick="altSal()">Sal</button>
    <button class="btn btn-sm btn-default" OnClick="altRua()">Rua</button>
    <button class="btn btn-sm btn-default" OnClick="altCli()">Cli</button>
    
</div>

<br><br>
<a href="main.php"> Voltar</a>
</center>					
<br>

</div>
</div>		
</div>
</div>		
</div>		
	
</body>
</html>	';	


?>