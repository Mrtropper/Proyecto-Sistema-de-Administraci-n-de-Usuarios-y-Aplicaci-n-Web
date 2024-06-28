<?php
include 'db_conection.php';
include 'includes/header.php';
?>

<script>
    window.onload = function() {
        window.scrollTo(0, 0);
    }
</script>
<body>
    <section class="container p-3">
    <article class="row">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <img src="imagenes\logo_empresa.png" class="rounded mx-auto d-block" alt="Logo" height="400">
                </div>
                <div>
                   <a href="reporte.php" target="_blank" class="btn btn-success">Generar Reporte</a>
                </div>
                
            </div>
        </div>
        <p style="font-family: 'Times New Roman', Times, serif;">Bienvenidos a nuestra tienda de Autos Triple B, donde pueden comprar todo tipo de autos, con cada marca y modelo con las que colaboramos. 
            Nos enorgullece ofrecer una amplia selección de vehículos para satisfacer todas sus necesidades y preferencias. 
            Desde autos económicos hasta familiares y autos deportivos de alta gama, estamos aquí para ayudarle a encontrar el automóvil perfecto que se adapte a su estilo de vida y presupuesto. 
            Nuestro equipo de expertos está listo para brindarle asesoramiento personalizado y asegurarse de que tenga una experiencia de compra sin igual. No dude en explorar nuestras ofertas especiales y financiamiento flexible para que su sueño de tener un auto nuevo se haga realidad.
            ¡Gracias por elegir Autos Triple B, su destino de confianza para la compra de automóviles!</p>
        <?php
        //Cuadro para agregar los autos
        ?>
        <div class="col-md-3">
            <?php
                if(isset($_SESSION["message"])){
            ?>
            <div class="alert alert-<?= $_SESSION['type_message']; ?>
            alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']  ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset();} ?>
            <h2 style="font-family: 'Times New Roman', Times, serif;">Agregar Auto</h2>
            <div class="card card-body" style="font-family: 'Times New Roman', Times, serif;">
                <form action="agregar_autos.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="placa" class="form-control" placeholder="Placa" autofocus requiered>
                    </div>
                    <div class="form-group">
                        <input type="text" name="marca" class="form-control" placeholder="Marca" requiered>
                    </div>
                    <div class="form-group">
                        <input type="text" name="modelo" class="form-control" placeholder="Modelo" requiered>
                    </div>
                    <div class="form-group">
                        <input type="number" name="kilometraje" class="form-control" placeholder="Kilometraje" step="1" min="0" requiered>
                    </div>
                    <div class="form-group">
                        <input type="text" name="fecha" class="form-control" placeholder="Fecha" requiered>
                    </div>
                    <div class="form-group">
                        <input type="number" name="precio" class="form-control" placeholder="Precio" step="1" min="0" required>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="agregar_autos" value="Agregar">
                </form>
            </div>
        </div>
        <div class="col-md-8" style="font-family: 'Times New Roman', Times, serif;">
            <table class="table table-bordered vertical-lines">
                    <thead>
                        <tr class="table-secondary">
                            <th>Placa</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Kilometraje</th>
                            <th>Fecha(Año)</th>
                            <th>Precio($)</th>
                            <th>Funcionalidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM tb_autos";
                            $stmt=$pdo->query($sql);
                            if($stmt->rowcount()>0){
                                while($row = $stmt->fetch()){
                        
                        ?>
                    <tr>
                        <td><?php echo $row['placa'];?></td>
                        <td><?php echo $row['marca'];?></td>
                        <td><?php echo $row['modelo'];?></td>
                        <td><?php echo $row['kilometraje'];?></td>
                        <td><?php echo $row['fecha'];?></td>
                        <td><?php echo $row['precio'];?></td>
                        <td>
                            <a href="actualizar_autos.php?id=<?php echo $row['placa'];?>" class="btn btn-secondary">Actualizar</a>
                            <a href="eliminar_autos.php?id=<?php echo $row['placa'];?>" class="btn btn-danger">Eliminar</a>
                        </td>                   
                    </tr>
                    <?php }} ?>
                    </tbody>
            </table>
        </div>
    </article>
</section>
</body>