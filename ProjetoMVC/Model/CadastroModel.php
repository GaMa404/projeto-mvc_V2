<?php

namespace ProjetoMVC\Model;

use ProjetoMVC\DAO\CadastroDAO;

class CadastroModel
{
    public $id, $nome, $email, $senha;
    public $email_digitado, $nova_senha, $senha_atual;

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

        header('Location: /login');
    }

    public function getSenhaByEmail($email_digitado)
    {
        $dao = new CadastroDAO();

        $obj = $dao->selectByEmail($email_digitado);

        return ($obj) ? $obj : new CadastroModel();
    }


}