<?php
include 'db_conection.php';

function agregarAuto($placa, $marca, $modelo, $kilometraje, $fecha, $precio){
    global $pdo;
    $sql="INSERT INTO tb_autos(placa, marca, modelo, kilometraje, fecha, precio) VALUES
    (:placa, :marca, :modelo, :kilometraje, :fecha, :precio)";
    $stmt=$pdo->prepare($sql);

    $stmt->bindParam(':placa',$placa);
    $stmt->bindParam(':marca',$marca);
    $stmt->bindParam(':modelo',$modelo);
    $stmt->bindParam(':kilometraje',$kilometraje);
    $stmt->bindParam(':fecha',$fecha);
    $stmt->bindParam(':precio',$precio);

    if($stmt->execute()){
        $_SESSION['message']="El Auto fue guardado correctamente";
        $_SESSION['type_message']="success";
        header("Location: index.php");
    }else{
        $_SESSION['message']="El Auto no se pudo guardar";
        $_SESSION['type_message']="Error";
        header("Location: index.php");
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $kilometraje = $_POST['kilometraje'];
    $fecha = $_POST['fecha'];
    $precio = $_POST['precio'];
    
    agregarAuto($placa, $marca, $modelo, $kilometraje, $fecha, $precio);
}
?>
