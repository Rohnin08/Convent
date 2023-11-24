<?php 

require_once('../config/connect.php');
require_once('../index.php');

if(hasUser()) {
    header('Location: /pages/dashbord.php');
}

if(hasUser()) {
    header('location: /cadastro');
}

if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
    $nome = $_POST('nome');
    $email = $_POST('email');
    $senha = $_POST('senha');
    $db = connectDatabase();
    $db -> exec("INSERT INTO (user_name, user_email, user_senha) values('".$nome."', '".$email."', '".$senha."')");
}
