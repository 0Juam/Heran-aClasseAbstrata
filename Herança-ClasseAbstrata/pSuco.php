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
<body style="background-image: url('img/suco.jpg');" >
    <div id="tela" style=" background: #ff9f1c;opacity:0.8;">
        <center>
    <img src="img/juice.png" style="heigh:120px; width:120px; center;" alt="drink">
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
    <input type="text" name="safra" id="safra" required placeholder="Digite o sabor do produto:">
    <br><br>
    <center>
        <br><br>
    <button class="botao" type="submit" name="enviar">Cadastrar</button>
    </br></br>
    <button class="botao" type="submit" name="voltar">Voltar</button>
 </br></br></br></br>
    <center>
    <?php
        require_once 'Bebida.php';
        require_once 'Suco.php';

        if(isset($_POST["enviar"]))
        {
            $suco = new Suco();
            $suco = setNome($_POST['nome']);
            $suco = setPreco($_POST['preco']);
            $suco = setSabor($_POST['sabor']);
            $preco = $_POST["preco"];

            echo $suco->mostrarBebida();
            echo "<br / >";
            echo $suco->verificaPreco($preco);
        }
        
    ?>
    </center>
    <br><br>
<br>
</div>
</body>
</html>