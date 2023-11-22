<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastre-se no Convent</h1>
    <form action="..\controllers\cadastrarUsuario.php" method="POST" >
        <label for="username"></label>
        <input type="text" name="nome" placeholder="Nome de usario">

        <label for="email"></label>
        <input type="email" name="email" placeholder="Digite seu email">

        <label for="senha"></label>
        <input type="password" name="senha" placeholder="Digite sua senha">

        <input type="submit" value="enviar">
    </form>
</body>
</html>
