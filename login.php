<?php

$conn = mysqli_connect("localhost", "root", "", "banco") or die("não foi possível conectar");

$usuario_informado = $_POST['usuario1'];
$senha = md5($_POST['senha1']);

$sql = "SELECT * FROM tb_usuario";

    $limite = mysqli_query($conn, $sql);

while ($sql = mysqli_fetch_array($limite)){
    $codigo = $sql['codigo'];
    $usuario_banco = $sql['usuario'];
}

//dados mostrados

echo "Usuarios cadastrados Codigo: $codigo <br> Usuario: $usuario_banco <br>";

if ($usuario_informado == $usuario_banco){
    echo "Usuario existente";
} else {
    echo "Usuario não existente";
}

echo "<a href='index.html'>Voltar</a>";