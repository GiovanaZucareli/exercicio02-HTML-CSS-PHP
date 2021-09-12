<?php


class banco{

    private $endereco   =   "localhost";
    private $usuario    =   "root";
    private $senha  =   "";
    private $nomeBanco  =   "projeto3bim";
    private $con;

    public function conectar(){
        $this->con = mysqli_connect($this->endereco,$this->usuario,$this->senha,$this->nomeBanco);
    }

    public function executarSql($sql){
        $resultado = mysqli_query($this->con,$sql);
        return $resultado;
    }
}

