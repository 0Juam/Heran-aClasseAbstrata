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
    <title>Vinho</title>
</head>
<body style="background-image: url('img/vinho.jpg');" >
    <div id="tela" style=" background: purple;opacity:0.8;">
        <center>
    <img src="img/wine.png" style="heigh:120px; width:120px; center;" alt="drink">
    <br><br>
        </center>
        
    <form method="POST">
    <h2>Digite as informações do vinho:</h2>
    <br>
    <label>Nome: </label> <br>
    <input type="text" name="nome" id="nome" required placeholder="Digite o nome do produto:">
    <br><br>
    <label>Preço: </label> <br>
    <input type="text" name="preco" id="preco" required placeholder="Digite o Preço do produto:">
    <br><br>
    <label>Safra: </label> <br>
    <input type="text" name="safra" id="safra" required placeholder="Digite a safra do produto:">
    <br><br>
    <label>Tipo: </label> <br>
    <input type="text" name="tipo" id="tipo" required placeholder="Digite o tipo do produto:">
    <br><br>
    <center>
        <br><br>
    <button class="botao" type="submit" name="enviar">Cadastrar</button>
 </br></br>
    <center>
    <?php
        require_once 'Bebida.php';
        require_once 'Vinho.php';

        if(isset($_POST["enviar"]))
        {
            $vinho = new Vinho($_POST['nome'],$_POST['preco'],$_POST['safra'],$_POST['tipo']);

            echo $vinho->mostrarBebida();
            echo "<br / >";
            $preco = $_POST['preco'];
            echo $vinho->verificaPreco($preco);
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