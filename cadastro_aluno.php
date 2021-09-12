<?php

include "usuario1.php";


$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$idTurma = $_POST['idTurma'];
$data_nascimento = $_POST['data_nascimento'];


$sql = "insert into aluno (nome, matricula, rg, data_nascimento, cpf, idTurma) values ('$nome', '$matricula', '$rg', '$data_nascimento', '$cpf', '$idTurma')";

$usuario = new aluno();

$usuario->setMatricula($matricula);
$usuario->setNome($nome);
$usuario->setRg($rg);
$usuario->setCpf($cpf);
$usuario->setdata_nascimento($data_nascimento);
$usuario->setIdTurma($idTurma);

echo $usuario->cadastrarAluno();


?>