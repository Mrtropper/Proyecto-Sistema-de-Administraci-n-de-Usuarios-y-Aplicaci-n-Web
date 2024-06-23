<?php
    include 'db_conection.php';
    include 'includes/header.php';
?>
<?php
if(isset($_GET['id'])){
        $placa=$_GET['id'];

        $sql="SELECT * FROM tb_autos WHERE placa= :placa";
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(':placa',$placa);
        $stmt->execute();

        $auto= $stmt->fetch(PDO::FETCH_ASSOC);
    }
    function actualizarAutos($placa, $marca, $modelo, $kilometraje, $fecha, $precio){
        global $pdo;

        $sql="UPDATE tb_autos SET marca = :marca, modelo = :modelo, kilometraje = :kilometraje, fecha = :fecha, precio = :precio 
        WHERE placa = :placa";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':placa',$placa);
        $stmt->bindParam(':marca',$marca);
        $stmt->bindParam(':modelo',$modelo);
        $stmt->bindParam(':kilometraje',$kilometraje);
        $stmt->bindParam(':fecha',$fecha);
        $stmt->bindParam(':precio',$precio);

        if($stmt->execute()){
            $_SESSION['message']="El auto fue actualizado correctamente";
            $_SESSION['type_message']="success";
            header("Location: index.php");
        }else{
            $_SESSION['message']="El auto no fue actualizado";
            $_SESSION['type_message']="error";
            header("Location: index.php");
        }
    }
    if(isset($_POST['actualizar_autos'])){
        $placa=$_POST['placa'];
        $marca=$_POST['marca'];
        $modelo=$_POST['modelo'];
        $kilometraje=$_POST['kilometraje'];
        $fecha=$_POST['fecha'];
        $precio=$_POST['precio'];
        actualizarAutos($placa, $marca, $modelo, $kilometraje, $fecha, $precio);
    }
?>
<section class="container p-4" style="max-width: 400px; background-color: #f0f0f0; margin: auto;">
    <h2>Actualizacion de auto</h2>
    <article class="row">
        <div class="card card-body" style="background-color: #e0e0e0;">
            <form action="actualizar_autos.php?id=<?php echo $placa;?>" method="POST">
                <div class="form-group">
                    <input type="text" readonly name="placa"
                        value="<?php echo htmlspecialchars($auto['placa']); ?>" class="form-control"
                        placeholder="Placa" required>
                </div>
                <div class="form-group">
                    <input type="text" name="marca" value="<?php echo htmlspecialchars($auto['marca']); ?>"
                        class="form-control" placeholder="Marca" required>
                </div>
                <div class="form-group">
                    <input type="text" name="modelo" value="<?php echo htmlspecialchars($auto['modelo']); ?>"
                        class="form-control" placeholder="Modelo" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="kilometraje" value="<?php echo htmlspecialchars($auto['kilometraje']); ?>"
                        class="form-control" placeholder="Kilometraje" min="0" step="1"required>
                </div>
                <div class="form-group">
                    <input type="text" name="fecha" value="<?php echo htmlspecialchars($auto['fecha']); ?>"
                        class="form-control" placeholder="Fecha" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="precio" value="<?php echo htmlspecialchars($auto['precio']); ?>"
                        class="form-control" placeholder="Precio" min="0" step="1"required>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="actualizar_autos" value="Actualizar">
            </form>
        </div>
    </article>
</section>
