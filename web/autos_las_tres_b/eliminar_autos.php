<?php
    include 'db_conection.php';
?>
<?php
    if(isset($_GET['id'])){
        $placa=$_GET['id'];
        $sql="DELETE FROM tb_autos WHERE placa = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$placa]);

        if($stmt->execute([$placa])){
            $_SESSION['message']="El auto fue eliminado con exito";
            $_SESSION['type_message']="success";
            header("Location: menuAdmin.php");
        }else{
            $_SESSION['message']="El auto no fue eliminado";
            $_SESSION['type_message']="error";
            header("Location: menuAdmin.php");
        }
    }
?>