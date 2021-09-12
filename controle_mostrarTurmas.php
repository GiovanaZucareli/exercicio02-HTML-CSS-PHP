
<?php

require_once "usuario1.php";



$usuario = new aluno();
$resultado = $usuario->getAllUsers();

	$tabela="<table class='table table-condensed'><thead><tr><th>TURMA</th><th>NOME</th></tr></thead><tbody>";
	while($linha=mysqli_fetch_array($resultado)){
		$id = $linha['idTurma'];
		$nome = $linha['nome'];
		$matricula =$linha['matricula'];
		$rg =$linha['rg'];
		$data_nascimento =$linha['data_nascimento'];
		$cpf =$linha['cpf'];

		$tabela.="<tr><td>$id</td><td>$nome</td></tr>";	
	}
	$tabela.="  </tbody></table>";
	echo $tabela; 

?>

