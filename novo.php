<?php include "verifica.php" ?>

<?php
echo "Tela retrita a usurios autenticados<br>";
$usuario = $_SESSION['usuario'];
echo "Usuario logado: $usuario <br>";

echo "<a href='login.html'>Voltar</a>";

?>