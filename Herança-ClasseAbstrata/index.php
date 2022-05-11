<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicial</title>
</head>
<body> 
    <div id="tela" style=" background: #5e60ce;opacity:0.8;">
        <center>
    <img src="img/drink.png" style="heigh:120px; width:120px; center;" alt="drink">
    <br><br>
        </center>
        
    <form method="POST">
  
    <h2>Selecione a bebida para ser cadastrada:</h2>
    <br>
    <select name="select" id="select">
      <option value="1" selected>Selecione</option>
      <option value="2">Vinho</option>
      <option value="3">Suco</option>
      <option value="4">Refrigerante</option>
    </select>
    <br><br>
    <center>
        <br><br>
    <button class="botao" type="submit" name="enviar">Enviar</button>
</br></br></br></br>
    <center>
    <?php
    if(isset($_POST['enviar'])){
        switch ($_POST['select']) {
            case 1:
                $resultado = "Escolha uma opção!";
                echo "<span><strong>".$resultado."<strong></span>";
                break;
            case 2:
                header('Location: pVinho.php');
                break;
            case 3:
                header('Location: pSuco.php');
                break;
            case 4:
                header('Location: pRefrigerante.php');
                break;
            default:
                $resultado = "Escolha uma opção!";
                echo "<span><strong>".$resultado."<strong></span>";
                break;
        }
    }
    ?>
    </center>
    <br><br>
<br>
</div>
</body>
</html>