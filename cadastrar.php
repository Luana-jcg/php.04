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
        <h3>Consulta de Usuários</h3>
        <hr>
        <?php
        include_once 'conexao.php';
        $sql = "SELECT nome, email, login, perfil FROM usuarios";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0){?>
            <table class="table table-hover">
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Login</th>
                    <th>Perfil</th>
                </tr>
                    
        <?php
            while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>{$row['nome']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['login']}</td>";
            echo "<td>{$row['perfil']}</td>";
            echo "</tr>";
            }     
        ?>
        </table>
                <?php
                }else{
                    echo "Nenhum registro encontrado!";
                }  
                mysqli_close($con);          
        ?>
        <a href="index.php">Painel</a>
    </div>
</body>
</html>