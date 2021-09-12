<?php

include "banco.php";

class aluno
{

    private $idTurma;
    private $nome;
    private $matricula;
    private $rg;
    private $data_nascimento;
    private $cpf;
 
    public function getAllUsers(){
		$sql = "select * from aluno order by idTurma asc";
		$resultado = $this->banco->executarSql($sql);
		return $resultado; 
	}

    function __construct(){
        $this->banco = new banco();
        $this->banco->conectar();
    }

    public function cadastrarAluno(){
        $sql = "";
        $nome = $this->getNome();
        $matricula = $this->getMatricula();
        $rg = $this->getRG();
        $data_nascimento = $this->getNascimento();
        $cpf = $this->getCPF();
        $idTurma = $this->getIdTurma();

        $sql = "insert into aluno (nome, matricula, rg, data_nascimento, cpf, idTurma) values ('$nome', $matricula, $rg, '$data_nascimento', $cpf, $idTurma)";

        $this->banco->executarSql($sql);
        return "Cadastrado";
    }

    public function getIdTurma(){
        return $this->idTurma;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function getRG(){
        return $this->rg;
    }

    public function getNascimento(){
        return $this->data_nascimento;
    }

    public function getCPF(){
        return $this->cpf;
    }

    public function setIdTurma($novovalor){
        $this->idTurma = $novovalor;
    }

    public function setNome($novovalor){
        $this->nome = $novovalor;
    }

    public function setMatricula($novovalor){
        $this->matricula = $novovalor;
    }

    public function setRG($novovalor){
        $this->rg = $novovalor;
    }

    public function setdata_nascimento($novovalor){
        $this->data_nascimento = $novovalor;
    }

    public function setCPF($novovalor){
        $this->cpf = $novovalor;
    }

}
?>