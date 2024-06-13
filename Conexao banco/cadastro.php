<?php
include ("conexao.php");

    if(isset($_POST['nome']) && isset($_POST['senha'])){   
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
    
        $sql_code="INSERT INTO usuarios (nome, senha) VALUES ('$nome', '$senha')";
    
        if(mysqli_query($banco, $sql_code)){
            echo "Usuario cadastrado com sucesso";
        }
        else{
            echo "erro" . mysqli_error($banco); 
        }
    }

    
    mysqli_close($banco);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

<h1>CADASTRO</h1>
    <form action="" method="POST">
        <p>
            <label>nome</label>
            <input type="text" name="nome">
        </p>
        <p>
            <label>senha</label>
            <input type="text" name="senha">
        </p>
        <p>
            <button type="submit">Criar</button>
        </p>
    </form>
</body>
</html>