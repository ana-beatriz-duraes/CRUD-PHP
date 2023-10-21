<?php
include_once '../conexao/conexao.php';
?>
<?php
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $delete = " delete from `cliente` where id=$id";
    $resultdelete = mysqli_query($con, $delete);
    if($resultdelete){
        header('location:../listagem/listagem.php');
    }else{
        die(mysqli_error ($con));
    }

}
?>

