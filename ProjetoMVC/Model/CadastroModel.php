<?php

namespace ProjetoMVC\Model;

use ProjetoMVC\DAO\CadastroDAO;

class CadastroModel
{
    public $id, $nome, $email, $senha;

    public function save()
    {
        $dao = new CadastroDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        }

        header('Location: /login');
    } 
    
    public function update()
    {
        $dao = new CadastroDAO();

        $dao->update($this);
    }

    public function getAllRows()
    {
        $dao = new CadastroDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new CadastroDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new CadastroModel();
    }

    /*public function autenticar($email)
    {
        $dao = new CadastroDAO();

        $email_cadastrado = $dao->selectEmail($this->email);
        
        if (!is_object($email_cadastrado))
        {
            $dao->insert($email);
        }
        else
        {
            null;
        }
    }*/


}