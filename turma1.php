<?php

include "banco.php";

class turma
{

    private $turma;
    private $turma_nome;
    private $curso_nome;

    public function getAllTurmas(){
		$sql = "select * from turma order by nome asc";
		$resultado = $this->banco->executarSql($sql);
		return $resultado; 
	}

    function __construct(){
        $this->banco = new banco();
        $this->banco->conectar();
    }

    public function cadastrarTurma(){
        $sql = "";
        $turma = $this->getTurma();
        $turma_nome = $this->getTurma_nome();
        $curso_nome = $this->getCurso_nome();

        $sql = "insert into turma (idTurma, nomeTurma, nomeCurso) values ('$turma', '$turma_nome', '$curso_nome')";

        $this->banco->executarSql($sql);
        return "Cadastrado";
    }

    public function getTurma(){
        return $this->turma;
    }

    public function getTurma_nome(){
        return $this->turma_nome;
    }

    public function getCurso_nome(){
        return $this->curso_nome;
    }

    public function setTurma($novovalor){
        $this->turma = $novovalor;
    }

    public function setTurma_nome($novovalor){
        $this->turma_nome = $novovalor;
    }

    public function setCurso_nome($novovalor){
        $this->curso_nome = $novovalor;
    }

}
?>