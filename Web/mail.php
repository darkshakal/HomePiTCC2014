<?php

require_once "autentica.php";

mysql_close();

if(isset($_POST['mail1']))
{
    $mailadd = $_POST['mail1'];
    $fp = fopen("/home/pi/mailaddress.txt", "w");
    $escreve = fwrite($fp, $mailadd );
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
        function mailENVIA()
        {
            var x=document.getElementById("mail2").value;
            if(x == "")
            {
                alert("Email nao pode ser vazio.");
            }
            else
            {
                alert("Email alterado com sucesso!");
                document.mailform.submit();
            }

        }
        
        
        </script>

</head>

<body style="background-color:#888">

<div class="container" style="padding:2px">
<div class="panel panel-primary" style="border-color: #000">
<div class="panel-heading" style="background:#000"><span class="label label-default" style="background-color: #fff;color:#000"> / Inicio / Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>
<div class="panel-body">
<div class="row">
   
<ul class="nav nav-tabs">
<li class="active"><a href="#"><span class="glyphicon glyphicon-envelope"></span>
<b>  Cadastro - Alteração de Email</b></a>
</li>
<li><a href="#"> </a></li>
</ul>
<center>';

print'<br>
<h4 style="margin-top: 0;color:#777">Cadastre ou altere o endereco de email para onde
o sistema deve enviar a mensagem de evento ocorrido.
</h4>
<br>
<form role="form" name="mailform" action="mail.php" method="post">
<div class="form-group"></center>
    <label for="exampleInputEmail1">&nbsp;&nbsp;Endere&ccedil;o de email</label>
    <input type="email" class="form-control" placeholder="entre o email" style="text-align: center" name="mail1" id="mail2">    
</div>
</form>
<br><br>
<center>
<button class="btn btn-sm btn-default" OnClick="mailENVIA()">Enviar</button>

';
       


print'
</div>
<center>
<br>
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