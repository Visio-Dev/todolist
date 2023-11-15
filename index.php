<?php 

include ('conexao.php');

$adicionar = $_POST['adicionar'];


$sql_code = "INSERT INTO tasks (adicionar) VALUES ('$adicionar')";

    $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
        if ($deu_certo) {
            echo "<p><b>Tarefa adicionada</b></p>";
            unset($_POST); 
        }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tarefas</title>
</head>
<body>
    <form enctype="multipart/form-data" method="POST" action="" class="formulario">
            <p>
                <label for="">Tarefa</label>
                <input value="<?php if (isset($_POST['adicionar'])) echo $_POST['adicionar']; ?>" type="text" name="adicionar" id=""><br>
            </p>
            <p>
                <button type="submit">Adicionar tarefa</button>
            </p>
        </form>


        <table border="1" cellpaddin="10">
            <thead>
                <td>Tarefa</td>
                <td>Concluído</td>
            </thead>
        </table>
</body>
</html>