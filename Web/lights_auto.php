<?php

require_once "autentica.php";

$data= date('Ymd');
$hora= date('Hi'); 

$query = "SELECT * FROM ilumi where ilumi_id = 1;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$bedauto = $result2['ilumi_auto'];


$query = "SELECT * FROM ilumi where ilumi_id = 2;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$kitauto = $result2['ilumi_auto'];

$query = "SELECT * FROM ilumi where ilumi_id = 3;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$resauto = $result2['ilumi_auto'];

$query = "SELECT * FROM ilumi where ilumi_id = 4;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$outauto = $result2['ilumi_auto'];


if (isset($_POST['bedroomauto'])) {
    if($bedauto == 0)
    {
        mysql_query("UPDATE ilumi SET ilumi_auto = 1 WHERE ilumi_id = 1");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (13,$data,$hora);");
    }
}

if (isset($_POST['bedroommanual'])) {
    if($bedauto == 1)
    {
        mysql_query("UPDATE ilumi SET ilumi_auto = 0 WHERE ilumi_id = 1");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (14,$data,$hora);");
    }
}

if (isset($_POST['kitchenauto'])) {
    if($kitauto == 0)
    {
        mysql_query("UPDATE ilumi SET ilumi_auto = 1 WHERE ilumi_id = 2");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (15,$data,$hora);");
    }
}

if (isset($_POST['kitchenmanual'])) {
    if($kitauto == 1)
    {    
        mysql_query("UPDATE ilumi SET ilumi_auto = 0 WHERE ilumi_id = 2");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (16,$data,$hora);");
    }
}

if (isset($_POST['restroomauto'])) {
    if($resauto == 0)
    {
        mysql_query("UPDATE ilumi SET ilumi_auto = 1 WHERE ilumi_id = 3");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (17,$data,$hora);");
    }
}

if (isset($_POST['restroommanual'])) {
    if($resauto == 1)
    {
        mysql_query("UPDATE ilumi SET ilumi_auto = 0 WHERE ilumi_id = 3");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (18,$data,$hora);");
    }
}

if (isset($_POST['outsideauto'])) {
    if($outauto == 0)
    {
        mysql_query("UPDATE ilumi SET ilumi_auto = 1 WHERE ilumi_id = 4");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (19,$data,$hora);");
    }
}

if (isset($_POST['outsidemanual'])) {
    if($outauto == 1)
    {
        mysql_query("UPDATE ilumi SET ilumi_auto = 0 WHERE ilumi_id = 4");
        mysql_query("INSERT INTO logs (log_event_id,log_data,log_hora) VALUES  (20,$data,$hora);");
    }
}

$query = "SELECT * FROM ilumi where ilumi_id = 1;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$bedauto_on_h = $result2['ilumi_on_h'];
$bedauto_on_m = $result2['ilumi_on_m'];
$bedauto_off_h = $result2['ilumi_off_h'];
$bedauto_off_m = $result2['ilumi_off_m'];
$bedauto = $result2['ilumi_auto'];


$query = "SELECT * FROM ilumi where ilumi_id = 2;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$kitauto_on_h = $result2['ilumi_on_h'];
$kitauto_on_m = $result2['ilumi_on_m'];
$kitauto_off_h = $result2['ilumi_off_h'];
$kitauto_off_m = $result2['ilumi_off_m'];
$kitauto = $result2['ilumi_auto'];

$query = "SELECT * FROM ilumi where ilumi_id = 3;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$resauto_on_h = $result2['ilumi_on_h'];
$resauto_on_m = $result2['ilumi_on_m'];
$resauto_off_h = $result2['ilumi_off_h'];
$resauto_off_m = $result2['ilumi_off_m'];
$resauto = $result2['ilumi_auto'];

$query = "SELECT * FROM ilumi where ilumi_id = 4;";
$result = mysql_query($query);
$result2 = mysql_fetch_array($result);
$outauto_on_h = $result2['ilumi_on_h'];
$outauto_on_m = $result2['ilumi_on_m'];
$outauto_off_h = $result2['ilumi_off_h'];
$outauto_off_m = $result2['ilumi_off_m'];
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
        
        function bedroomAUTO()
        {
        document.bedroom_auto.submit();
        }
        
        function bedroomMANUAL()
        {
        document.bedroom_manual.submit();
        }
        
        function kitchenAUTO()
        {
        document.kitchen_auto.submit();
        }
        
        function kitchenMANUAL()
        {
        document.kitchen_manual.submit();
        }
        
        function restroomAUTO()
        {
        document.restroom_auto.submit();
        }
        
        function restroomMANUAL()
        {
        document.restroom_manual.submit();
        }
        
        function outsideAUTO()
        {
        document.outside_auto.submit();
        }
        
        function outsideMANUAL()
        {
        document.outside_manual.submit();
        }
        
        function bedaltera()
        {
           window.location.href="bed_hora.php";
        }
        
        function kitaltera()
        {
           window.location.href="kit_hora.php";
        }
        
  
        function resaltera()
        {
           window.location.href="res_hora.php";
        }
        
  
        function outaltera()
        {
           window.location.href="out_hora.php";
        }

        </script>


</head>

<body style="background-color:#888">

<div class="container" style="padding:2px">
<div class="panel panel-primary" style="border-color: #000">
<div class="panel-heading" style="background:#000"><span class="label label-default" style="background-color: #fff;color:#000"> / Inicio / Iluminacao / Automacao &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>
<div class="panel-body">
<div class="row">
   
<ul class="nav nav-tabs">
<li class="active"><a href="#"><span class="glyphicon glyphicon-dashboard"></span>
<b>  Automa&ccedil;&atilde;o Ilumina&ccedil;&atilde;o</b></a>
</li>
<li><a href="#"> </a></li>
</ul><center><br>';

print'
<div class="row"> 
    <div class="col-md-3 col-xs-6 column"> 
    <div class="panel panel-primary" style="border-color: #aaa">
    <div class="panel-heading" style="padding: 4px;font-size:12"><b>Quarto</b></div>
    <div class="panel-body" style="text-align:top;padding: 0px">
    
    <h5 style="color:#777"><b>
    
    L:
    ';
    
    if($bedauto_on_h < 10)
        echo "0".$bedauto_on_h;
    else
        echo $bedauto_on_h;
    echo ":";
    
    if($bedauto_on_m < 10)
        echo "0".$bedauto_on_m;
    else
        echo $bedauto_on_m;
    
    
    print'
    &nbsp;
    D: 
    ';

    if($bedauto_off_h < 10)
        echo "0".$bedauto_off_h;
    else
        echo $bedauto_off_h;
    echo ":";
    
    if($bedauto_off_m < 10)
        echo "0".$bedauto_off_m;
    else
        echo $bedauto_off_m;


    print'
    </b></h5>

        <form role="form" name="bedroom_manual" action="lights_auto.php" method="post">
        <input type="hidden" name="bedroommanual" value="bedroommanual">
        </form>				
        
        <form role="form" name="bedroom_auto" action="lights_auto.php" method="post">
        <input type="hidden" name="bedroomauto" value="bedroomauto">
        </form>	
        
    <div class="btn-group">
    <button class="btn btn-sm btn-default" OnClick="bedaltera()">Alterar</button>
    ';
    
    if($bedauto == 1)
    {
        print'
        
        <button class="btn btn-sm btn-default" OnClick="bedroomMANUAL()"> Manual</button>';
    }
    else
    {
        print'
        <button class="btn btn-sm btn-default" OnClick="bedroomAUTO()">Auto</button>';
    }
    
    print'
        
    </div><br><br>
    <div class="alert alert-warning" style="padding:0px">Status: ';
     if($bedauto == 1)
         echo "Automatico";
     else
         echo "Manual";
     
    print'
    </div>
    </div>
    </div>
    </div>
    




    <div class="col-md-3 col-xs-6 column"> 
    <div class="panel panel-primary" style="border-color: #aaa">
    <div class="panel-heading" style="padding: 4px;font-size:12"><b>Cozinha</b></div>
    <div class="panel-body" style="text-align:top;padding: 0px">
    
    <h5 style="color:#777"><b>
    
    L:
    ';
    
    if($kitauto_on_h < 10)
        echo "0".$kitauto_on_h;
    else
        echo $kitauto_on_h;
    echo ":";
    
    if($kitauto_on_m < 10)
        echo "0".$kitauto_on_m;
    else
        echo $kitauto_on_m;
    
    
    print'
    &nbsp;
    D: 
    ';

    if($kitauto_off_h < 10)
        echo "0".$kitauto_off_h;
    else
        echo $kitauto_off_h;
    echo ":";
    
    if($kitauto_off_m < 10)
        echo "0".$kitauto_off_m;
    else
        echo $kitauto_off_m;


    print'
    </b></h5>

        <form role="form" name="kitchen_manual" action="lights_auto.php" method="post">
        <input type="hidden" name="kitchenmanual" value="kitchenmanual">
        </form>				
        
        <form role="form" name="kitchen_auto" action="lights_auto.php" method="post">
        <input type="hidden" name="kitchenauto" value="kitchenauto">
        </form>	
        
    <div class="btn-group">
    <button class="btn btn-sm btn-default" OnClick="kitaltera()">Alterar</button>
    ';
    
    if($kitauto == 1)
    {
        print'
        
        <button class="btn btn-sm btn-default" OnClick="kitchenMANUAL()"> Manual</button>';
    }
    else
    {
        print'
        <button class="btn btn-sm btn-default" OnClick="kitchenAUTO()">Auto</button>';
    }
    
    print'
        
    </div><br><br>
        <div class="alert alert-warning" style="padding:0px">Status: ';
     if($kitauto == 1)
         echo "Automatico";
     else
         echo "Manual";
     
    print'
        </div>
        </div>
        </div>
        </div>

</div>

<div class="row"> 
   


    <div class="col-md-3 col-xs-6 column"> 
    <div class="panel panel-primary" style="border-color: #aaa">
    <div class="panel-heading" style="padding: 4px;font-size:12"><b>Sala</b></div>
    <div class="panel-body" style="text-align:top;padding: 0px">
    
    <h5 style="color:#777"><b>
    
    L:
    ';
    
    if($resauto_on_h < 10)
        echo "0".$resauto_on_h;
    else
        echo $resauto_on_h;
    echo ":";
    
    if($resauto_on_m < 10)
        echo "0".$resauto_on_m;
    else
        echo $resauto_on_m;
    
    
    print'
    &nbsp;
    D: 
    ';

    if($resauto_off_h < 10)
        echo "0".$resauto_off_h;
    else
        echo $resauto_off_h;
    echo ":";
    
    if($resauto_off_m < 10)
        echo "0".$resauto_off_m;
    else
        echo $resauto_off_m;


    print'
    </b></h5>

        <form role="form" name="restroom_manual" action="lights_auto.php" method="post">
        <input type="hidden" name="restroommanual" value="restroommanual">
        </form>				
        
        <form role="form" name="restroom_auto" action="lights_auto.php" method="post">
        <input type="hidden" name="restroomauto" value="restroomauto">
        </form>	
        
    <div class="btn-group">
    <button class="btn btn-sm btn-default" OnClick="resaltera()">Alterar</button>
    ';
    
    if($resauto == 1)
    {
        print'
        
        <button class="btn btn-sm btn-default" OnClick="restroomMANUAL()"> Manual</button>';
    }
    else
    {
        print'
        <button class="btn btn-sm btn-default" OnClick="restroomAUTO()">Auto</button>';
    }
    
    print'
        
    </div><br><br>
    <div class="alert alert-warning" style="padding:0px">Status: ';
     if($resauto == 1)
         echo "Automatico";
     else
         echo "Manual";
     
    print'
    </div>
    </div>
    </div>
    </div>
    
<div class="col-md-3 col-xs-6 column"> 
    <div class="panel panel-primary" style="border-color: #aaa">
    <div class="panel-heading" style="padding: 4px;font-size:12"><b>Rua</b></div>
    <div class="panel-body" style="text-align:top;padding: 0px">
    
    <h5 style="color:#777"><b>
    
    L:
    ';
    
    if($outauto_on_h < 10)
        echo "0".$outauto_on_h;
    else
        echo $outauto_on_h;
    echo ":";
    
    if($outauto_on_m < 10)
        echo "0".$outauto_on_m;
    else
        echo $outauto_on_m;
    
    
    print'
    &nbsp;
    D: 
    ';

    if($outauto_off_h < 10)
        echo "0".$outauto_off_h;
    else
        echo $outauto_off_h;
    echo ":";
    
    if($outauto_off_m < 10)
        echo "0".$outauto_off_m;
    else
        echo $outauto_off_m;


    print'
    </b></h5>

        <form role="form" name="outside_manual" action="lights_auto.php" method="post">
        <input type="hidden" name="outsidemanual" value="outsidemanual">
        </form>				
        
        <form role="form" name="outside_auto" action="lights_auto.php" method="post">
        <input type="hidden" name="outsideauto" value="outsideauto">
        </form>	
        
    <div class="btn-group">
    <button class="btn btn-sm btn-default" OnClick="outaltera()">Alterar</button>
    ';
    
    if($outauto == 1)
    {
        print'
        
        <button class="btn btn-sm btn-default" OnClick="outsideMANUAL()"> Manual</button>';
    }
    else
    {
        print'
        <button class="btn btn-sm btn-default" OnClick="outsideAUTO()">Auto</button>';
    }
    
    print'
        
    </div><br><br>
    <div class="alert alert-warning" style="padding:0px">Status: ';
     if($outauto == 1)
         echo "Automatico";
     else
         echo "Manual";
     
    print'
    </div>
    </div>
    </div>
    </div>
</div>

';

print'

<a href="lights.php"> Voltar</a> &nbsp;&nbsp;&nbsp; <a href="main.php"> Home</a>
</center>
</div>		
</div>
</div>		
</div>
</div>		
	
</body>
</html>	';
?>