<?php
	$user = $_POST['usuario'];
	$passw = $_POST['senha'];

	if($passw == 12345){
		echo "Acesso autorizado! <br><br>";
		echo "<a href=paginaCadastro.html>Clique aqui para cadastrar os produtos</a>";
	}else{
   		echo "Senha Incorreta!! <br><br>";
   		echo "<a href=paginaInicial.html>Voltar a Página Inicial</a>";
 	}
?>