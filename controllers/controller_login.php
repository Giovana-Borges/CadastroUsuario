<?php
include("../Cadastro de Usuário/class_conexao.php");

class controller_login extends class_conexao{

    private $senha2;
    private $db;

    public function __construct()
    {
        $this->senha2=filter_input(INPUT_POST, 'senha2', FILTER_SANITIZE_STRING);
        $this->verificaSenhaLogin();
    }

    private function verificaSenhaLogin()
    {
        $this->db=$this->conectaDB()->prepare("select * from usuario where senha=BINARY ?");
        $this->db->bindValue(1,"2");
        $this->db->execute();
        $fetch = $this->db->fetch(PDO::FETCH_ASSOC);

        if(password_verify($this->senha2,$fetch['password'])){
            echo "Senha é igual";
        }else{
            echo "A senha não confere";
        }
    }
}
$new = new controller_login();