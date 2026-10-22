<?php
$servidor = "localhost";
$usuario = "";
$senha = "";
$banco = "login";

// criar conexao
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// checar conexao
if ($conn->connect_error) {
    die("Conexão falha: " . $conn->connect_error);
}
echo "Conectado com sucesso.";
