<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilocarro.css">
    <title>CarrosLegais</title>
</head>
<body>

</head>
<body>

<div class="top">
  <h1>Locar CarrosLegais</h1>
</div>

<ul>
  <li><a href="index1.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="cadastrocliente.html">Cadastro Cliente</a></li>
  <li><a href="cadastrofuncionario.html">Cadastro Funcionario</a></li>
  <li><a href="cadastroveiculo.html">Cadastro Veículo</a></li>
  <li style="float:right"><a class="active" href="login.html">Login</a></li>
</ul>

<div style="overflow:auto">
  <div class="menu">
    <a href="#">Comecial</a>
    <a href="#">Utilitarios</a>
    <a href="#">Esportivos</a>
    <a href="#">Luxo</a>
  </div>

  <div class="main">
    <h2>Veículos em destaque</h2>
    <p>veja nosso veículos em destaque com preços acessíveis</p>

    <?php
      $conn=mysqli_connect("localhost", "root", "","carrinho");
                   
      $sql = "SELECT * FROM produtos";
      $qr = mysqli_query($conn,$sql) or die(mysqli_error());
      while($ln = mysqli_fetch_assoc($qr)){
          echo '<h2>'.$ln['nome'].'</h2> <br />';
          echo 'Preço : R$ '.number_format($ln['preco'], 2, ',', '.').'<br />';
          echo '<img src="img/'.$ln['imagem'].'" /> <br />';
          echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'">Comprar</a>';
          echo '<br /><hr />';
      }
    ?>
  </div>

  <div class="right">
    <h2>About</h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
  </div>
</div>

<div class="bottom">© copyright w3schools.com</div>

</body>
</html>