<?php
	
	echo"<a href='paginaInicial.html'>Home</a><br><br>";
	include('conexao.php');
	
	$fruit = $_POST['nome'];
	
	$sql= "select * from frutas where nome = '$fruit' ";
	
	$resultado = mysqli_query($conexao, $sql) or die ("Erro na consulta");

	while($registro = mysqli_fetch_array($resultado)){
		
		$id = $registro['idFruta'];
		$nome = $registro['nome'];
		$preco = $registro['preco'];
		
			echo "<br>";	
			echo"-------------------- <br>";	
			echo "nome: $nome <br>";
			echo "preço: $preco";		
	}	
?>