<?php

$conn = mysqli_connect("localhost", "root", "", "banco");

$usuario1 = $_POST['usuario'];
$senha = md5($_POST['senha']);

$sqlbusca = "SELECT * FROM tb_user WHERE usuario = '$usuario'"

$resultado = mysqli_query($conn, $sqlbusca) or die("não foi possível buscar os dados")

if($usuario1 == "" || $usuario1 = null){
    echo "O campo não pode ser vazio";
}

if  (mysqli_num_rows($resultado)>0){
    echo "Usuario já existe";
}else{
    $sqlinsert = "INSERT INTO tb_usuario(usuario,senha) VALUES('$usuario','$senha')";

    mysqli_query($conn, $sqlinsert) or die("Não foi possível inserir os dados");

    echo "Usuario inserido <br> Usuario: $usuario";

    echo "<br>"; 
}

echo "<a href='index.html'>Voltar</a>";

