<?php

$conn = mysqli_connect("localhost", "root", "", "banco") or die("não foi possível conectar");

$usuario2 = $_POST['usuario1'];
$senha2 = md5($_POST['senha1']);

$sqlbusca = "SELECT * FROM tb_usuario WHERE usuario = '$usuario2' AND senha = '$senha2'";

$dados = mysqli_query($conn, $sqlbusca) or die("não foin possível buscar os dados");

if  (mysqli_num_rows($dados)<=0){
    echo "Usuario não cadastrado ou dados invalidos";
}else{
    echo "Login efetuado com sucesso <br>";

    if(isset($usuario2)){
        session_start();
        $_SESSION['usuario'] = $usuario2;
    }
    header("Location: novo.php");

    //if(isset($usuario2)){
    //    setcookie("usuario", $usuario2, time() + 60);
    //}
    //$teste = $_COOKIE["usuario"];
    //echo "Usuario logado: $teste";

    echo "<br>";
}

echo "<a href='index1.php'>Voltar</a>";