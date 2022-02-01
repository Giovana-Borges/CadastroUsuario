<?php
include("../Cadastro de Usuário/class_conexao.php");

class controller_cadastro extends class_conexao{

    private $senha;
    private $confsenha;
    private $db;

    public function __construct()
    {
        $this->senha=filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        $this->confsenha=filter_input(INPUT_POST, 'confsenha', FILTER_SANITIZE_STRING);
        $this->verificaSenha();

    }

    private function verificaSenha()
    {
        if ($this->senha == $this->confsenha){
            $this->cadastraSenha();
        }else{
            echo "Senha e confirmação de senha diferentes";
            return false;
        }
    }

    private function hashSenha()
    {
        $this->senha=password_hash($this->senha,PASSWORD_DEFAULT);
    }

    private function cadastraSenha()
    {
        $id=0;
        $this->hashSenha();
        $this->db=$this->conectaDB()->prepare("insert into usuario values (?,?,?,?)");
        $this->db->bindValue("",$id);
        $this->db->bindValue("",$this->senha);
        $this->db->execute();
        echo "senha inserida com sucesso";
    }
}

$new = new controller_cadastro();