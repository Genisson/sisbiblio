<!DOCTYPE html>
<html>
<head>
	<title>Gravar Editora</title>
</head>
<body>
<?php
require_once('conexao.php');

$categoria = $_POST['txtcategoria'];
$sql = "insert into tb_categoria (nm_categoria) values ('$categoria')" ;

if (mysqli_query($con,$sql)) 
{
	echo "editora inserida com sucesso";

	
}else{

	echo "Não foi possível inserir nome da Editora";
}
?>

</body>
</html>