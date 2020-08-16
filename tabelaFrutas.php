<?php
	echo"<a href='paginaInicial.html'>Home</a><br><br>";
	include('conexao.php');
	 // $sql="select*from tbAluno"; String de consulta ao banco de dados.
	 
	
	$sql= "select * from frutas";
	
	$resultado = mysqli_query($conexao, $sql) or die ("Erro na consulta");
	
	while($registro = mysqli_fetch_array($resultado)){ // mysqli_fetch_array = permite obter os resultados de uma consulta sql.
		$id = $registro['idFruta'];
		$nome = $registro['nome'];
		$preco = $registro['preco'];
		
	echo"<br>";	
	echo"-------------------- <br>";	
	echo "id: $id <br>";
	echo "nome: $nome <br>";
	echo "preço: $preco <br>";
	}
?>	