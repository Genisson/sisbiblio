<?php

require_once("conexao.php");

$usuario = $_POST['txtusuario'];
$senha = $_POST['txtsenha'];

$sql = " SELECT * FROM tb_usuario WHERE ds_usuario = '$usuario' AND ds_senha = '$senha' ";

$result =(mysqli_query($con,$sql));


if ($result){
	
    $dados = mysqli_fetch_array($result);

    $nomeusu = $dados["nm_usuario"];

	session_start();

	$_SESSION['nomeusu'] = $nomeusu;
	$_SESSION['logado'] = true;

    header("Location: principal.php");

}ELSE{

	header("Location: index.php");

	alert ('Usuário inválido. Tente novamente');
}
?>


</body>
</html>


