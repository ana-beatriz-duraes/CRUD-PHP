<?php
include_once '../conexao/conexao.php';


if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $idade = $_POST['idade'];
    $grupo = $_POST['grupo'];

    $sql = "insert into `cliente` (nome,email,telefone,idade, grupo) values('$nome','$email','$telefone','$idade','$grupo')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:../listagem/listagem.php');
        echo "cadastrado";
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container">
        <form action="" method="post">

            <h1 class="my-3 text-light">Cadastro</h1>
            <div>
                <label class="form-label text-light md-3">Nome:</label>
                <input type="text" name="nome" placeholder="Digite seu nome...">
            </div>

            <div>
                <label class="form-label text-light md-3">Email:</label>
                <input type="email" name="email" placeholder="Digite seu e-mail...">
            </div>
            <div>
                <label class="form-label text-light md-3">Telefone:</label>
                <input type="tel" name="telefone" id="" placeholder=" Digite seu telefone...">
            </div>

            <div>
                <label class="form-label text-light md-3">Data de nascimento</label>
                <input type="date" name="idade">
            </div>

            <div>
                <label class="form-label text-light md-3">Grupo</label>
                <input type="text" name="grupo">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    
<?php
echo '<button type="button" name="create" class="btn  btn-light"><a href="../listagem/listagem.php" class="text-decoration-none">Listagem clientes</a></button>
';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>