<?php

session_start();

if(isset($_POST['btnEnviar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);
    $perfil = $_POST['perfil'];
    
    include_once 'conexao.php';

    $sql = "INSERT INTO usuarios VALUES(null, '{$nome}', '{$email}', '{$login}', '{$senha}', '{$perfil}')";
    if(mysqli_query($con, $sql)){
        $msg = "Usuário cadastrado com sucesso";
        header("Location:cadastrar.php?msg=".$msg);
    }else{
        $msg = "Erro ao cadastrar o uásurio";
        header("Location:cadastrar.php?msg=".$msg);
    }
    
    mysqli_close();
}

?>