<?php
if (isset($_COOKIE["usuario_logado"])){
    $usuario = htmlspecialchars($_COOKIE["usuario_logado"]);
} else {
    header("location: login.php");
    exit;
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
    <h1>Bem Vindo, <?php echo $usuario;?></h1>
    <p>Você está autenticado no sistema</p>
    <form method="post" action="logout.php">
        <button type="submit">Sair</button>
    </form>
    <footer>
    <p>&copy; 2024 - Crud</p>
    </footer>
    
</body>
</html>