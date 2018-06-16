<?php
	require_once("conexao.php");

	$codigo = 2;

	$sql = "delete from tb_categoria where cd_categoria=$codigo";
	$resultado = mysqli_query ($con, $sql);

	if ($resultado)
	{
		echo 'Registro excluído com sucesso';
	}

	else
	{
		echo 'Erro ao tentar excluir';
	}
?>