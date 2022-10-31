<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        input, label {display: block}
    </style>
</head>
<body>
    <form action="/login/auth" method="post">

    <label>E-mail:</label>
    <input name="email" type="text" />

    <br> <br>

    <label>Senha:</label>
    <input name="senha" type="password" />

    <br> <br>

    <a href="/cadastro/update"> Mudar senha </a>

    <br> <br>

    <a href="/cadastro/form"> Não tem uma conta? Clique aqui para se cadastrar </a>
    
    <br> <br>


    <button type="submit">Entrar</button>
    </form>
</body>
</html>