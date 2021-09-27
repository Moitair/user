<?php

$conn = mysqli_connect("localhost", "root", "", "banco");

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$sqlinsert = "INSERT INTO tb_usuario(usuario,senha)
VALUES('$usuario','$senha')";

mysqli_query($conn, $sqlinsert) or die("Não foi possível inserir os dados");

//Mostra os dados inseridos

echo "Usuario inserido <br> Usuario: $usuario";

echo "<br>";

echo "Senha inserida <br> Senha: $senha";