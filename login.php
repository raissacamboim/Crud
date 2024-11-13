<?php
include "funcoes.php";
if($_SERVER["REQUEST_METHOD"]==
"POST"){
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $usuarioValido = false;
    //carregar os usúario do arquivo
    $_usuarios = carregarUsuarios();
    //verificar se o usuário e a senha estão no
    //vetor de usuários
    foreach ($usuarios as $user){
        if($user["usuario"] === $usuario &&
        $user["senha"] === $senha){
            $usuarioValido = true;
            break;
        }
    }
    if ($usuarioValido){
        //define o cookie para login por
        //5 minutos (300 arquivos)
        setcookie("usuario_logado", $usuario, time()+300,"/");
        header("location: index.php");
        exit;
    } else {
        echo"usuário ou senha incorreto";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <h2>Login de Usuário</h2>
    <form method="post" action="login.php">
         <input type="text" name="usuario" id="usuario" placeholder="Digite seu usuário"> 
         <input type="password" name="senha" id="senha" placeholder="Digite sua Senha" required>
        <button type="submit">Entrar</button>
    </form>
    <a href="cadastro.php">Não tem cadastro? clique aqui!</a>
    <footer>
        <p>&copy; 2024 - Crud</p>
    </footer>
</body>
</html>