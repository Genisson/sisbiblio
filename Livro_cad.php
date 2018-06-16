<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Livro</title>
	<meta charset="utf-8">
</head>
<body>

<?php

include ("conexao.php");
$sql = "select * from tb_categoria" ;
$resultado = mysqli_query($con,$sql);
//$rs = mysqli_fetch_assoc ($resultado);
//echo $rs['cd_categoria'];

?>
<form method="post" action = "livro_salvar.php">
<label>
	<p><label for="isbn">ISBN</label></p><input id="isbn" name="txtisbn" type="text" placeholder="Insira o número do ISBN" required="">
	<p><label for="nomelivro">Nome</label></p><input id="nomelivro" name="txtlivro" type="text" placeholder="Insira o seu nome" required="">
    <p><label for="categoria">Categoria</label></p>
    <select name ="cdocategoria">
     <option value="0" >Selecione</option>
     <?php
     while ($rs = mysqli_fetch_assoc ($resultado)) {


     ?>

    <option value = "<?php echo $rs['cd_categoria'] ?>"><?php echo $rs['nm_categoria'];?></option>
    
     

    <?php
       
    }
?>
  
</select>

    <p><label for="editora">Editora</label></p><input id="editora"  name="cboeditora">


 <p><label for="editora">Editora</label></p>
    <select name ="cdoeditora">
     <option value="0" >Selecione</option>
     <?php
     $sql_Editora = "select * from tb_editora";
     $resultado_Editora = mysqli_connect ($con,$sql_Editora)
    
     while ($rs_Editora = mysqli_fetch_assoc ($resultado))

      {


     ?>

    <option value = "<?php echo $rs_Editora ['cd_editora'] ?>"><?php echo $rs['nm_editora'];?></option>
    
     

    <?php
       
    }
?>
  
</select>

    <p><label for="editora">Editora</label></p><input id="editora"  name="cboeditora">


    <p><label for="paginas">Paginas</label></p><input id="paginas"  name="txtnrpaginas" type=text>
    <p><label for="imagens">Imagens</label></p><input id="imagens"  name="txtimagem" type=text>
    
    <p><label for="autor">Autor</label><input id="autor" name="cboautor" >
    <select><option>Machado de Assis</option>
    <option>Clarice Lispector</option></select></p>
	

	</label>

<p><input type="submit" value="Cadastrar"></p>

</form>


</body>
</html>