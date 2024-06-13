<?php
    include ('conexao.php');

    if (isset($_POST['nome']) && isset($_POST['senha'])) {
        
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $sql_code = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";
        $busca = $banco->query($sql_code) or die("falha na execuçao" . $banco->error);

        $quantidade = $busca->num_rows;

        if($quantidade == 1){
            $obj = $busca->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $obj['id'];
            $_SESSION['nome'] = $obj['nome'];

            header("Location: painel.php");

        } else{
            echo "usuario ou senha incorretos";
        }
    }
    mysqli_close($banco);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <style>
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <h1>LOGIN</h1>
        <p>
            <label>nome</label>
            <input type="text" name="nome">
        </p>
            <label>senha</label>
            <input type="password" name="senha">
        <p>
            <button type="submit">Entrar</button>
            <button><a href="cadastro.php">Criar conta</a></button>
        </p>
    </form>

    
</body>
</html>

