<?php
include_once '../conexao/conexao.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <h1 class="text-light">Registro dos clientes</h1>
    <table class="table table-striped-columns table-dark">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Idade</th>
                <th scope="col">Grupo</th>
                <th scope="col">Operações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $ano = 2023;
             $select = "Select * from `cliente`";
            $resultSelect = mysqli_query($con, $select);
            if ($resultSelect) {
                while ($row = mysqli_fetch_assoc($resultSelect)) {
                    $id = $row['id'];
                    $nome = $row['nome'];
                    $email = $row['email'];
                    $telefone = $row['telefone'];
                    $idade = $ano - $row['idade'];
                    $grupo = $row['grupo'];

                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$nome.'</td>
                    <td>'.$email.'</td>
                    <td>'.$telefone.'</td>
                    <td>'.$idade.'</td>
                    <td>'.$grupo.'</td>
                    <td>
                    <button type="button" name="update" class="btn  btn-danger"><a href="../delete/delete.php?deleteid='.$id.'" class="text-decoration-none">Excluir</a></button>
                    <button type="button" name="update" class="btn  btn-info"><a href="../update/update.php?updateid='.$id.'" class="text-decoration-none">Alterar</a></button>
                    </td>
                </tr>';      
                }
            }
            ?>
        </tbody>
    </table>

<?php
echo '<button type="button" name="create" class="btn  btn-info"><a href="../create/cadastro.php" class="text-decoration-none">Cadastrar cliente</a></button>
';?>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>