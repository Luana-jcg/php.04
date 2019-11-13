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
        <h3>Alterar Senha</h3>
        <hr>
        <?php
        if(isset($_GET["msg"]))
            echo $_GET["msg"];
        ?>
        <form action="alterasenha.php" method="post">
            <label>Senha Antiga: </label>
            <input type="password" name="senhantiga" class="form-control col-md-4" required>
            <label>Nova Senha: </label>
            <input type="password" name="senhanova" class="form-control col-md-4" required>
            <label>Confirma Nova Senha: </label>
            <input type="password" name="confirmasenhanova" class="form-control col-md-4" required>
        </form><br>
        <a href="painel.php">Painel Inicial</a>
    </div>
</body>
</html>