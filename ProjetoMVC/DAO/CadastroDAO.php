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
        $sql = 'UPDATE cadastro SET senha=? WHERE email = ? AND senha = ?';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->senha);
        $stmt->bindValue(2, $model->id);
        
        $stmt->execute();
    }

    public function select()
    {
        $sql = 'SELECT * FROM cadastro';

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $id)
    {
        include_once 'Model/CadastroModel.php';

        $sql = 'SELECT * FROM usuario WHERE id=?';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ProjetoMVC\Model\CadastroModel");
    }

    /*public function selectEmail($email)
    {
        $sql = 'SELECT * FROM usuario WHERE email=?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();

        return $stmt->fetchObject("ProjetoMVC\Model\CadastroModel");
    }*/


}