<?php

require_once "autentica.php";

$pededata = 1;

if(isset($_POST['dataini1']) && isset($_POST['datafin1']))
{
    $dataini = $_POST['dataini1'];
    $datafin = $_POST['datafin1'];
    
    $query = "select log.log_data, log.log_hora, event.descricao from logs as log
inner join event_id as event on (log.log_event_id = event.event_id) where log.log_data >= $dataini and log.log_data <= $datafin";
    
    $result = mysql_query($query);
    
    $count = mysql_num_rows($result);
    
    if($count > 0)    
    $pededata = 0;
    else
    $pededata = 2;    
    
}

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
        function chamaLOG()
        {
        var dini = document.getElementById("dataini2").value;
        var dfin = document.getElementById("datafin2").value;
        var invl = 0;
        
        if((dini.length) < 6)
        {
            alert("Data inicial invalida!");
            invl = 1;
        }

        if((dfin.length) < 6)
        {
            alert("Data final invalida!");
            invl = 1;
        }
        
        if(dfin < dini)
        {
            alert("Data final deve ser maior que data inicial.");
            invl = 1;
        }

        if(invl != 1)
        {
            document.dataint.submit();
        }
              }  
        </script>

</head>

<body style="background-color:#888">

<div class="container" style="padding:2px">
<div class="panel panel-primary" style="border-color: #000">
<div class="panel-heading" style="background:#000"><span class="label label-default" style="background-color: #fff;color:#000"> / Inicio / Logs &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>
<div class="panel-body">
<div class="row">
   
<ul class="nav nav-tabs">
<li class="active"><a href="#"><span class="glyphicon glyphicon-list-alt"></span>
<b>  Log de Eventos</b></a>
</li>
<li><a href="#"> </a></li>
</ul>
<center>';

if ($pededata == 1)
{
print'<br>

<div class="row">
	<div class="col-md-6 col-xs-6 column">
        
        <form role="form" name="dataint" action="logs.php" method="post">
        <b>Data Inicial:</b>
        <input type="text" class="form-control" placeholder="yyyymmdd" style="width: 100px;text-align: center" name="dataini1" id="dataini2">
           
        
        </div>
        
	<div class="col-md-6 col-xs-6 column">
        

        <b>Data Final:</b>
        <input type="text" class="form-control" placeholder="yyyymmdd" style="width: 100px;text-align: center" name="datafin1" id="datafin2">
        </form>	        
        
        </div>
        
        <br><br>

</div>

    <button class="btn btn-default" OnClick="chamaLOG()">Enviar</button>
';
}

if($pededata == 0)
{
    
    print'<br><br>
        
  <div class="panel panel-primary">
  <div class="panel-heading" style="padding: 4px">Eventos ocorridos entre ';
  
   echo substr($dataini,0,4);
   echo "/";
   echo substr($dataini,4,2);
   echo "/";
   echo substr($dataini,6,2); 
   
   echo " e ";
   
   echo substr($datafin,0,4);
   echo "/";
   echo substr($datafin,4,2);
   echo "/";
   echo substr($datafin,6,2); 
   
  
  print'  
  </div>
  <div class="panel-body">
  <table class="table">
  <div "row">
  <div class="col-md-4 col-xs-4 column">
  <b>Data</b>
  </div>
  
  <div class="col-md-4 col-xs-4 column">
  <b>Hora</b>
  </div>
  
  <div class="col-md-4 col-xs-4 column">
  <b>Evento</b>
  </div>  
  </div>
    ';
    
    while($row = mysql_fetch_array($result))
    {
       print' 
  <div "row">
  <div class="col-md-4 col-xs-4 column">
  ';
   echo substr($row['log_data'],0,4);
   echo "/";
   echo substr($row['log_data'],4,2);
   echo "/";
   echo substr($row['log_data'],6,2);
   print'
  </div>
  
  <div class="col-md-4 col-xs-4 column">
  ';
   echo substr($row['log_hora'],0,2);
   echo ":";
   echo substr($row['log_hora'],2,2);
   print'
  </div>
  
  <div class="col-md-4 col-xs-4 column">
    ';  
    echo $row['descricao'];
    print'
  </div>  
  </div>';
        
   }
   

    
    print'
    </table>
    </div>
    </div>
    ';
    
}

   if($pededata == 2)
   {
    print'
        <br><br>
    <div class="alert alert-warning"><b>N&atilde;o foram encontrados registros</b></div>
    
    <a href="logs.php"> Nova Consulta</a><br>
    
    ';
   
   }

print'
<br><br><br>
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