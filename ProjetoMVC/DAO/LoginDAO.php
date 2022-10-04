<?php

namespace ProjetoMVC\DAO;

use ProjetoMVC\Model\LoginModel;

class LoginDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function SelectByEmailSenha($email, $senha)
    {
        $sql = "SELECT * FROM usuario WHERE email = ? AND senha = sha1(?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        return $stmt->fetchObject("ProjetoMVC\Model\LoginModel");
    }
}