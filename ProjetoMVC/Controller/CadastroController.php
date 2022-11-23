<?php 

namespace ProjetoMVC\Controller;

use ProjetoMVC\Model\CadastroModel;

class CadastroController extends Controller
{
    public static function form()
    {
        $model = new CadastroModel();

        parent::render('Cadastro/FormCadastro', $model);
    }

    public static function save()
    {
        $cadastro = new CadastroModel();

        $cadastro->id = $_POST['id'];
        $cadastro->nome = $_POST['nome'];
        $cadastro->email = $_POST['email'];
        $cadastro->senha = $_POST['senha'];

        $cadastro->save();

        header("Location: /login");
    }

    public static function formUpdate()
    {
        $model = new CadastroModel();
        parent::render('Cadastro/FormSenha', $model);
    }

    public static function update()
    {
        $cadastro = new CadastroModel();

        $cadastro->id = $_POST['id'];
        $cadastro->nome = $_POST['nome'];
        $cadastro->email_digitado = $_POST['email_digitado'];
        $cadastro->senha_atual = $_POST['senha_atual'];
        $cadastro->nova_senha = $_POST['nova_senha'];

        $senha = $cadastro->getSenhaByEmail($_POST['email_digitado']);

        if ($senha == sha1($cadastro->senha_atual))
        {
            if($cadastro->nova_senha !== $cadastro->senha_atual)
            {
                $cadastro->update();
            }         
        }
    }
}
