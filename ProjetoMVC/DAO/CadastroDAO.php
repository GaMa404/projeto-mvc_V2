<?php

namespace ProjetoMVC\DAO;
use \PDO;

use ProjetoMVC\Model\CadastroModel;

class CadastroDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(CadastroModel $model)
    {
        $sql = 'INSERT INTO usuario (nome, email, senha) VALUES (?, ?, sha1(?))';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);

        $stmt->execute();
    }

    public function update(CadastroModel $model)
    {
        $sql = 'UPDATE usuario SET senha = sha1(?) WHERE email = ?';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nova_senha);
        $stmt->bindValue(2, $model->email_digitado);
        
        $stmt->execute();
    }

    public function selectByEmail($email_digitado)
    {
        $sql = 'SELECT u.senha FROM usuario u WHERE email = ?';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $email_digitado);

        $stmt->execute();

        return $stmt->fetchObject("ProjetoMVC\Model\CadastroModel");
    }
}