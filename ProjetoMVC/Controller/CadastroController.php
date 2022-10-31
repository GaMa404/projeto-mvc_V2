<?php 

namespace ProjetoMVC\Controller;

use ProjetoMVC\Model\CadastroModel;

class CadastroController extends Controller
{
    public static function form()
    {
        $model = new CadastroModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        parent::render('Cadastro/FormCadastro', $model);
    }

    /*public static function auth()
    {
        $model = new CadastroModel();

        $model->email = $_POST['email'];

        $cadastro_usuario = $model->autenticar($model->email);

        if ($cadastro_usuario == null)
        {
            header("Location: /cadastro?erro=true");
        }
    }*/

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

    public static function update()
    {
        $model = new CadastroModel();

        parent::render('Cadastro/FormSenha', $model);
    }
}
