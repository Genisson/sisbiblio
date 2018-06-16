<?php require_once('verificasecao.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>SISBIBLIO - Sistema Bibliotecário</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/principal_biblio.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">

</head>
<body>
 <section class="menu">
   <div class="logo">
   <img src="imagens/logo-painel.png">

   	
   </div>
   <div class="list_menu">
   	
   </div>
 </section>
<strong> Bem Vindo </strong>
     
    <?php
    
	echo ($_SESSION['nomeusu']); 

    ?>
    <a href="fechar.php">Fechar</a>


</body>
</html>