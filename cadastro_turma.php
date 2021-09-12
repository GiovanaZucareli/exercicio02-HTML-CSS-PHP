<?php

include "turma1.php";


$turma = $_POST['turma'];
$turma_nome = $_POST['turma_nome'];
$curso_nome = $_POST['curso_nome'];

$sql = "insert into turma (idTurma, nomeTurma, nomeCurso) values ('$turma', $turma_nome, $curso_nome)";

$usuario = new turma();

$usuario->setTurma($turma);
$usuario->setTurma_nome($turma_nome);
$usuario->setCurso_nome($curso_nome);

echo $usuario->cadastrarTurma();


?>