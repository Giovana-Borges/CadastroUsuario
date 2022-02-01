<?php

abstract class class_conexao{
    protected function conectaDB(){
        try{
            $con=new \PDO("mysql:host=localhost;dbname=turismo_gramado", "root","G14B03c2002.");
            return $con;
        }catch (PDOException $erro){
            return $erro->getMessage();
        }
    }
}