<?php 

namespace ProjetoMVC\Controller;

use ProjetoMVC\Model\CargoModel;

class CargoController extends Controller
{
    public static function index()
    {
        parent::isAuthenticated();

        $model = new CargoModel();
        $model->getAllRows();

        parent::render('Cargo/ListarCargo', $model);
    }

    public static function form()
    {
        parent::isAuthenticated();

        $model = new CargoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

            parent::render('Cargo/FormCargo', $model);
    }

    public static function save()
    {
        parent::isAuthenticated();

        $cargo = new CargoModel();

        $cargo->id = $_POST['id'];
        $cargo->descricao = $_POST['descricao'];
        $cargo->save();

        header("Location: /cargo");
    }

    public static function delete()
    {
        parent::isAuthenticated();

        $model = new CargoModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /cargo");
    }
}