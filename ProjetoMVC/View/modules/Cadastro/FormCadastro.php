<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Usuários</title>
</head>

<body>
<form action="/cadastro/save" method="post">
        <fieldset>
            <legend> Cadastro de Usuários </legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome"> Nome: </label>
            <input type="text" name="nome" id="nome" />

            <br> <br>

            <label for="email"> Email: </label>
            <input type="text" name="email" id="email"  />

            <br> <br>

            <label for="senha"> Senha: </label>
            <input type="password" name="nova_senha" id="nova_senha" />

            <br> <br>

            <button type="submit"> Enviar </button>
        </fieldset>
    </form>
</body>
</html>