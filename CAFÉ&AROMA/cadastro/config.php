<?php 
    $hostname = "localhost";
    $bancodedados = "coffearoma";
    $usuario = "root";
    $senha = "root";

    $mysqli = mysqli_connect($hostname, $usuario, $senha, $bancodedados);
    
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $sql="insert into Pessoa(nome,email,senha) values('$nome','$email','$senha')";
    mysqli_query($mysqli,$sql);
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../image/miniatura.png" type="image/x-icon">
    <title>Cadastro - CAFÉ & AROMA</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="cadastro.css">
</head>
<body><br>
    <div class="formulario-config">
        <img src="../image/logos/logo-2.png" width="180px" height="68px">
        <h3>Cadastro realizado <br> com sucesso!</h3> <br>
        <a href="../login/login.html" id="login02"><p>No momento é necessário CLICAR AQUI <br>para efetuar login!</p></a>
    </div>
</body>
</html>