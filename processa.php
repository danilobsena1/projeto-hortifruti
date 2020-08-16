<?php
	$name = $_POST['nome'];
	$price = $_POST['preco'];

	include('conexao.php'); // inclui o banco de dados a realizar a conexão.

	$sql = "insert into frutas(nome, preco) values ('$name','$price')";
	if(mysqli_query($conexao, $sql)){
		echo"<br>Produto cadastrado com sucesso!!";
	}else{
		echo"Erro!!".mysql_error(conexao);
	}
	mysqli_close($conexao);

	echo"<br><br><a href='paginaCadastro.html'>Cadastrar novo produto</a> / <a href='paginaInicial.html'>Home</a>";
?>