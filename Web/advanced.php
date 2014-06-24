<?php

require_once "autentica.php";

mysql_close();

if(isset($_POST['desligar1']))
{
$fp = fopen("/tmp/desliga.txt", "w");
$escreve = fwrite($fp, "desligar");
fclose($fp);
    
}

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
        function desligar()
        {
           var r=confirm("Tem certeza que deseja desligar o sistema?");
            if (r==true) {
                alert("Sistema sera desligado em no maximo 1 minuto.");
                document.desligarpi.submit();
            } else 
            {
            
            } 
       }
        </script>
</head>

<body style="background-color:#888">

<div class="container" style="padding:2px">
<div class="panel panel-primary" style="border-color: #000">
<div class="panel-heading" style="background:#000"><span class="label label-default" style="background-color: #fff;color:#000"> / Inicio / Configuracoes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>
<div class="panel-body">
<div class="row">
   
<ul class="nav nav-tabs">
<li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span>
<b>  Altera senha</b></a>
</li>
<li><a href="#"> </a></li>
</ul>
<center>
<form class="form-signin" role="form" name="login" action="chpwd.php" method="post">
<input type="hidden" name="action" value="setPassword">
<input class="form-control" placeholder="New Password" required=""  type="password" name="password1">
<input class="form-control" placeholder="New Password Again" required="" type="password" name="password2"><br>
<button class="btn btn-sm btn-default" "type="submit">Confirma </button>
</form>				
';

if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];

    switch ($msg) {
        case 1:
            print'
                <div class="alert alert-warning"><b>Senhas digitadas n&atilde;o coincidem.</b></div>';
            break;
        case 2:
            print'
                <div class="alert alert-warning"><b>Senhas n&atilde;o devem conter mais que 27 d&iacute;gitos.</b></div>';
            break;
        case 3:
            print'
                <div class="alert alert-warning"><b>Usu&aacute;rio n&atilde;o encontrado.</b></div>';
            break;
        case 4:
            print'
                <div class="alert alert-success"><b>Senha alterada com sucesso!</b></div>';
            break;
    }
}


print'
						
<ul class="nav nav-tabs">
<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>
<b>  Desliga Sistema</b></a>
</li>
<li><a href="#"> </a></li>
</ul>
<br>

<form role="form" name="desligarpi" action="advanced.php" method="post">
<input type="hidden" name="desligar1" value="desligar1">
</form>

<button class="btn btn-sm btn-default" OnClick="desligar()">Enviar</button><br><br>
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