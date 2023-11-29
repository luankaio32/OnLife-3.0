<?php

if (!isset($_SESSION)) {
    session_start();
}


if (isset($_SESSION['id'])) {
 
    header("Location: compra.php");
    exit();
}


$_SESSION['id'] = 1234; 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    Bem-vindo ao painel, <?php echo $_SESSION['id']; ?>
   
    <p>
        <a href="logout.php"> Sair </a>
    </p>
</body>
</html>
