<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Suco</title>
</head>
<body style="background-image: url('img/suco.jpg');" >
    <div id="tela" style=" background: #ff9f1c;opacity:0.8;">
        <center>
    <img src="img/juicee.png" style="heigh:120px; width:120px; center;" alt="drink">
    <br><br>
        </center>
        
    <form method="POST">
    <h2>Digite as informações do suco:</h2>
    <br>
    <label>Nome: </label> <br>
    <input type="text" name="nome" id="nome" required placeholder="Digite o nome do produto:">
    <br><br>
    <label>Preço: </label> <br>
    <input type="text" name="preco" id="preco" required placeholder="Digite o Preço do produto:">
    <br><br>
    <label>Sabor: </label> <br>
    <input type="text" name="sabor" id="sabor" required placeholder="Digite o sabor do produto:">
    <br><br>
    <center>
        <br><br>
    <button class="botao" type="submit" name="enviar">Cadastrar</button>
 </br></br>
    <center>
    <?php
        require_once 'Bebida.php';
        require_once 'Suco.php';
 
        if(isset($_POST["enviar"]))
        {
            $suco = new Suco($_POST['nome'],$_POST['preco'],$_POST['sabor']);
          

            echo $suco->mostrarBebida();
            echo "<br / >";
            $preco = $_POST['preco'];
            echo $suco->verificaPreco($preco);
        }
        
    ?>
    </br></br>
    <a  href="index.php">
     <img src="img/retornar.png" style="heigh:60px; width:60px; center;" alt="voltar">
    </a>
    </center>
    <br><br>
<br>
</div>
</body>
</html>