<!DOCTYPE html>
<html>
<head>
	<title>Livro Salvar</title>
</head>
<body>

<?php
require_once('conexao.php');

$isbn = $_POST['txtisbn'];
$nomelivro = $_POST['txtlivro'];
$categoria = $_POST['cbocategoria'];
$editora = $_POST['cboeditora'];
$paginas = $_POST['txtnrpaginas'];
$autor = $_POST['cboautor'];
$imagem = $_POST['txtimagem'];


$sql = "INSERT INTO tb_livro ( nm_livro, cd_categoria, cd_editora, nr_paginas, cd_autor, nm_imagem, isbn_livro) VALUES ('$nomelivro', $categoria , $editora , '$paginas' , $autor , '$imagem' , '$isbn')" ;



if (mysqli_query($con,$sql)) 
{
	echo "editora inserida com sucesso";

    	
}else{

    echo $sql;

	echo "Não foi possível inserir nome da Editora";
}
?>

</body>
</html>