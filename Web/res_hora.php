<?php

require_once "autentica.php";

if(isset($_POST['action']))
{
    $hh_l=$_POST['horal'];
    $hh_d=$_POST['horadd'];
    $mm_l=$_POST['minl'];
    $mm_d=$_POST['mindd'];
    
    mysql_query("UPDATE ilumi SET ilumi_on_h ='$hh_l' WHERE ilumi_id = 3");
    mysql_query("UPDATE ilumi SET ilumi_on_m ='$mm_l' WHERE ilumi_id = 3");
    mysql_query("UPDATE ilumi SET ilumi_off_h ='$hh_d' WHERE ilumi_id = 3");
    mysql_query("UPDATE ilumi SET ilumi_off_m ='$mm_d' WHERE ilumi_id = 3");
    
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
        function alteraHORA()
        {
                           
            var horal=document.getElementById("horaliga").value;
            var horadd=document.getElementById("horades").value;
            var minl=document.getElementById("minliga").value;
            var mindd=document.getElementById("mindes").value;
            var invalid=0;

            if(horal > 23 || horadd > 23)
            {
                alert("Hora Invalida! Deve ser menor que 23.");
                invalid=1;
            }
            
            if(minl > 59 || mindd > 59)
            {
                alert("Hora Invalida! Deve ser menor que 59.");
                invalid=1;
            }
            
            if(minl == "" || mindd == "" || horal =="" || horadd=="" )
            {
                alert("Campos vazios nao aceitos.");
                invalid=1;
            }
            
            if(invalid == 0)
            {
                alert("Intervalo alterado com sucesso! ");
                document.getElementById("altera").submit();
            }
        }
        
        </script>

</head>

<body style="background-color:#888">

<div class="container" style="padding:2px">
<div class="panel panel-primary" style="border-color: #000">
<div class="panel-heading" style="background:#000"><span class="label label-default" style="background-color: #fff;color:#000"> / Inicio / Iluminacao / Config / Auto &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>
<div class="panel-body">
<div class="row">
   
<ul class="nav nav-tabs">
<li class="active"><a href="#"><span class="glyphicon glyphicon-dashboard"></span>
<b>  Config - Intervalo</b></a>
</li>
<li><a href="#"> </a></li>
</ul>
<center>';


print'<br>
<form role="form" name="altera" action="res_hora.php" method="post" id="altera" >
<div class="alert alert alert-info"><b>Setar novo intervalo para a Sala </b></div>
<div class="row">
<div class="input-group"><center>
<span class="input-group-btn">
<h5 style="margin-top: 0;color:#777"> Ligar as: </h5>
<input type="text" class="form-control" placeholder="hh" style="width: 100px;text-align: center" name="horal" id="horaliga">
<input type="text" class="form-control" placeholder="mm" style="width: 100px;text-align: center" name="minl" id="minliga">

</span>
</div>
</div>
<br>
<div class="row">
<div class="input-group"><center>
<span class="input-group-btn">
<h5 style="margin-top: 0;color:#777"> Desligar as: </h5>
<input type="hidden" name="action" value="action">
<input type="text" class="form-control" placeholder="hh" style="width: 100px;text-align: center" name="horadd" id="horades">
<input type="text" class="form-control" placeholder="mm" style="width: 100px;text-align: center" name="mindd" id="mindes">


</span>
</div>
</div>

</form>

<button class="btn btn-default" OnClick="alteraHORA()">Enviar</button>

';


print'

<br><br><br>
<a href="lights_auto.php"> Voltar</a>
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