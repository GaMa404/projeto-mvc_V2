<?php

use ProjetoMVC\Controller\
{
    PessoaController,
    ProdutoController,
    CategoriaProdutoController,
    CargoController,
    FuncionarioController,
    LoginController,
    CadastroController
};

$uri_parse = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($uri_parse)
{
    case '/':
        include 'View/modules/Login/FormLogin.php';
    break;

    case '/home':
        include 'View/modules/Home/home.php';
    break;

    ## ============== Rotas para cadastro ==============
    case '/cadastro/form':
        CadastroController::form();
    break;

    case '/cadastro/save':
        CadastroController::save();
    break;

    case '/cadastro/form_update':
        CadastroController::formUpdate();
    break;

    case '/cadastro/update';
        CadastroController::update();
    break;

    ## ============== Rotas para login ==============
    case '/login':
        LoginController::index();
    break;

    case '/login/auth':
        LoginController::auth();
    break;

    case '/logout':
        LoginController::logout();
    break;

    ## ============== Rotas para pessoa ==============
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;
        
    case '/pessoa/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;
    

    ## ============== Rotas para produto ==============
    case '/produto':
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
        ProdutoController::delete();
    break;

    ## ============== Rotas para categoria_produto ==============
    case '/categoria_produto':
        CategoriaProdutoController::index();
    break;

    case '/categoria_produto/form':
        CategoriaProdutoController::form();
    break;

    case '/categoria_produto/save':
        CategoriaProdutoController::save();
    break;

    case '/categoria_produto/delete':
        CategoriaProdutoController::delete();
    break;


    ## ============== Rotas para cargo ==============
    case '/cargo':
        CargoController::index();
    break;

    case '/cargo/form':
        CargoController::form();
    break;

    case '/cargo/save':
        CargoController::save();
    break;
    
    case '/cargo/delete':
        CargoController::delete();
    break;


    ## ============== Rotas para funcionario ==============
    case '/funcionario':
        FuncionarioController::index();
    break;

    case '/funcionario/form':
        FuncionarioController::form();
    break;

    case '/funcionario/save':
        FuncionarioController::save();
    break;

    case '/funcionario/delete':
        FuncionarioController::delete();
    break;
    
    ## ========================================================

    default:
        echo("Erro 404!");
    break;
}