<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>SISBIBLIO - Sistema Bibliotecário</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/login_biblio.css">
    <link rel="icon" type="img/png" href="img/icones/livro.png">

</head>
<body class="bg_login">
    <section class="login">
        <div>
	        <img class="img_login" src="img/sisbiblio_transp.png" alt="SisBiblio" title="Logomarca Sistema Bibliotecário ">
        </div>

        <form class="form-login" method="post" action="verificalogin.php">
	        <input id="usuario" name="txtusuario" type="text" placeholder="Digite o Email" required="">
	        <input id="senha" name="txtsenha" type="password" placeholder="Digite sua senha" required="">

	        <button  type="submit" name="botao">Acessar</button>
	        <a class="senha" href= recuperarsenha.html >Recuperar Senha?</a>
        </form>
    </section>
    
</body>
</html>