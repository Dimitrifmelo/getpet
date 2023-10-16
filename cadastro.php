<?php

require_once 'usuarios.php';

$u = new usuario;

require_once 'conexao.php';

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/cadastro.css">

    <title>Cadastro</title>

</head>

<?php include 'menu.php'; ?>


<body>
    

 

<div class="geral">

<form action="" method="post">

 

        <input type="text" name="nome" placeholder="Nome completo"> <br> <br>
        <input type="number" name="telefone" placeholder="Telefone"> <br> <br>
        <input type="email" name="email" placeholder="E-mail"> <br> <br>
        <input type="number" name="cpf" placeholder="CPF"> <br><br>
        <input type="date" name="data" placeholder="Data de Nascimento"> <br><br>
        <input type="senha" name="senha" placeholder="Crie Sua Senha">  <br><br>

        <button type="submit">Cadastrar</button>
 

</form>



</div>

<?php

 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $data = $_POST["data"];
            $senha = $_POST["senha"];

 
            if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($cpf) && !empty($data) && !empty($senha)) {

                $database = new Database();

                $connection = $database->conectar();
                $u->conectar("getpet", "localhost", "root", "");

       

                if ($u->msgErro == "") {

                 

                        if ($u->cadastrar($nome, $senha, $email, $data, $cpf, $telefone)) {  

                            ?>

                            <div id="msg-sucesso">

                            Cadastrado com sucesso! Volte para fazer o login!

                            </div>

                            <?php

                        } else {

                            ?>

                            <div class="msg-erro">

                            Erro ao cadastrar no sistema!

                            </div>

                            <?php

                        }

                 

       

                    header("location: index.php");

                } else {

                    echo "Erro: ".$u->msgErro;

                }

       

                $connection = null;

            } else {

                ?>

                <div class="msg-erro">

                Preencha todos os campos!

                </div>

                <?php

            }

        }

        ?>

 

 

</body>

</html>