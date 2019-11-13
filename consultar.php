<?php include_once 'validar.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>Cadastro de Usuários</h3>
        <hr>
        <?php
        if(isset($_GET["msg"]))
            echo $_GET["msg"];
        ?>
        <form action="gravar.php" method="post">
            <label>Nome: </label>
            <input type="text" name="nome" class="form-control col-md-4" required>
            <label>E-mail: </label>
            <input type="email" name="email" class="form-control col-md-4" required>
            <label>Login: </label>
            <input type="text" name="login" class="form-control col-md-4" required>
            <label>Senha: </label>
            <input type="password" name="senha" class="form-control col-md-4" required>
            <label>Perfil: </label>
            <select name="perfil" class="form-control col-md-4" required>
                <option disable selected>-- Escolha uma opção --</option>
                <option value="admin">Administrador</option>
                <option value="user">Usuário</option>
            </select><br>
            <input name="btnEnviar" type="submit" value="Enviar" class="btn btn-success">
        </form><br>
        <a href="painel.php">Painel Inicial</a>
    </div>
</body>
</html>