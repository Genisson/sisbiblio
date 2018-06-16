<!DOCTYPE html>
<html>
<head>
	<title>Gravar Editora</title>
</head>
<body>
<?php
require_once('conexao.php');

$editora = $_POST['txteditora'];
$sql = "insert into tb_editora (nm_editora) values ('$editora')" ;

if (mysqli_query($con,$sql)) 
{
	echo "editora inserida com sucesso";

	
}else{

	echo "Não foi possível inserir nome da Editora";
}
?>

</body>
</html>