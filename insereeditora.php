<?php
require_once=("conexao.php")

$nomeEditora = $POST['txtnomeeditora'];

$sql = "select * from tb_editora where ds_Editora= '$nomeEditora'";

if (mysql_query($con,$sql)) {
	echo "Editora cadastrada com sucesso.";
}
else{
	echo "Usuário inválido. Tente Novamente";
}
?>