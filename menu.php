<?php
    
    
    if (isset($_SESSION['id'])) {
        $id_user = $_SESSION['id']; 
    }

    require_once('conexao.php');
    date_default_timezone_set('America/Sao_Paulo');

    $database = new Database();
    $db = $database->conectar();
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/menu.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

    <title>cabeçalho</title>

</head>

<body>

    <header>

        <img class="logo" src="imagens/logo.png" alt="" srcset="">

       <h1 class="titulo">Get Pet</h1>
        <div class="navega">

                    <a href="#">Catalogo</a>

                    <a href="#">Sobre Nós</a>

                    <a href="arearestrita.php">Area Restrita</a>
                        
                    <a href="contato.php">Contato</a>

        </div>





        <?php 
            if (!isset($_SESSION['id'])) { 
                

        echo '<a class="logs" href="login.php">Logar</a>';
        echo '<a  class="logs" href="cadastro.php">Cadastrar</a>';

            }
        ?> 
        
       













    </header>

</body>

</html>