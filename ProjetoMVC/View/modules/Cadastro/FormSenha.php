<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha</title>
    <style>
        input, label {display: block}
    </style>
</head>

<body>
<form action="/cadastro/save" method="post">
        <fieldset>
            <legend> Alterar Senha </legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />
            <input type="hidden" value="<?= $model->nome?>" name="nome" />

            <label for="email"> Email: </label>
            <input type="text" name="email_digitado" id="email_digitado" />

            <br> <br>

            <label for="senha_atual"> Senha Atual: </label>
            <input type="password" name="senha_atual" id="senha_atual" />

            <br> <br>

            <label for="nova_senha"> Nova Senha: </label>
            <input type="password" name="nova_senha" id="nova_senha" />

            <br> <br>

            <button type="submit"> Enviar </button>
        </fieldset>
    </form>
</body>
</html>