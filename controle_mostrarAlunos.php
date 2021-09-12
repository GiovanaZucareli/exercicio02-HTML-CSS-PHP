<?php

require_once "usuario1.php";



$usuario = new aluno();
$resultado = $usuario->getAllUsers();

	$tabela="<table class='table table-condensed'><thead><tr><th>ID</th><th>NOME</th><th>MATRÍCULA</th><th>RG</th><th>NASCIMENTO</th><th>CPF</th></tr></thead><tbody>";
	while($linha=mysqli_fetch_array($resultado)){
		$id = $linha['idTurma'];
		$nome = $linha['nome'];
		$matricula =$linha['matricula'];
		$rg =$linha['rg'];
		$data_nascimento =$linha['data_nascimento'];
		$cpf =$linha['cpf'];

		$tabela.="<tr><td>$id</td><td>$nome</td><td>$matricula</td><td>$rg</td><td>$data_nascimento</td><td>$cpf</td></tr>";	
	}
	$tabela.="  </tbody></table>";
	echo $tabela; 

?>