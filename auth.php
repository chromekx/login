<?php
include "config.php";

if (isset($_POST['entrar'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $sql = "SELECT email, senha FROM usuario";
    $query = $conn->query($sql);
    $usuario = $query->fetch_assoc();
    
    if ($usuario['email'] == $email && password_verify($senha, $usuario['senha'])) {
        $sql = "SELECT id, email, senha, dtNasc FROM usuario";
        $query = $conn->query($sql);
        $usuario = $query->fetch_assoc();

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['dtNasc'] = $usuario['dtNasc'];

        header('Location: perfil.php');
    }

}