<?php
include_once '../conexao/conexao.php';
$id = ($_GET['updateid']);
$update = "select * from `cliente` where id=$id";
$resultUpdate = mysqli_query($con, $update);
$row=mysqli_fetch_assoc($resultUpdate);
$nome = $row['nome'];
$email = $row['email'];
$telefone = $row['telefone'];
$idade= $row['idade'];
$grupo= $row['grupo'];

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $idade = $_POST['idade'];
    $grupo= $row['grupo'];

    $sql = "update `cliente` set  id='$id',nome='$nome',email='$email',telefone='$telefone', idade='$idade', grupo='$grupo' where id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:../listagem/listagem.php');
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
    <title>Edição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cadastro.css">
</head>

<body>

    <body class="bg-dark">
        <div class="container">
            <form action="" method="post" class="">

                <h1 class="my-3 text-light">Edição de Cadastro</h1>
                <div>
                    <label class="form-label text-light md-3">Nome:</label>
                    <input type="text" name="nome" placeholder="Digite seu nome..."  value="<?php echo $nome;?>" >
                </div>

                <div>
                <label class="form-label text-light md-3">Email:</label>
                    <input type="email" name="email" placeholder="Digite seu e-mail..."  value="<?php echo $email;?>">
                </div>
                <div>
                    <label class="form-label text-light md-3">Telefone:</label>
                    <input type="tel" name="telefone" id="" placeholder=" Digite seu telefone..." value="<?php echo $telefone;?>">
                </div>

                <div>
                    <label class="form-label text-light md-3">Data de nascimento</label>
                    <input type="date" name="idade" value="<?php echo $idade;?>">
                </div>

                <div>
                    <label class="form-label text-light md-3">Grupo</label>
                    <input type="text" name="grupo" value="<?php echo $grupo;?>">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</body>

</html>