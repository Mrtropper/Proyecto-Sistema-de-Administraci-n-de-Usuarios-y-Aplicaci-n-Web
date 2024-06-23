<?php
include 'db_conection.php';
include 'includes/header.php';
?>
<script>
    window.onload = function() {
        window.scrollTo(0, 0);
    }
</script>
    <section class="container p-3">
    <article class="row">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <img src="imagenes\logo_empresa.png" class="rounded mx-auto d-block" alt="Logo" height="400">
                </div>
                <div>
                <a href="reportes\fpdf\PruebaV.php" target="_blank" class="btn btn-success"><i class="fas fa-file-pdf"></i>Generar Reporte</a>
                </div>
                
            </div>
        </div>
        <p style="font-family: 'Times New Roman', Times, serif;">Bienvenidos a nuestra tienda de Autos Triple B, donde pueden comprar todo tipo de autos, con cada marca y modelo con las que colaboramos. 
            Nos enorgullece ofrecer una amplia selección de vehículos para satisfacer todas sus necesidades y preferencias. 
            Desde autos económicos hasta familiares y autos deportivos de alta gama, estamos aquí para ayudarle a encontrar el automóvil perfecto que se adapte a su estilo de vida y presupuesto. 
            Nuestro equipo de expertos está listo para brindarle asesoramiento personalizado y asegurarse de que tenga una experiencia de compra sin igual. No dude en explorar nuestras ofertas especiales y financiamiento flexible para que su sueño de tener un auto nuevo se haga realidad.
            ¡Gracias por elegir Autos Triple B, su destino de confianza para la compra de automóviles!</p>
        <h1 style="font-family: 'Times New Roman', Times, serif;">Marcas con las colaboramos</h1>
        <figure class="figure">
        <h2 style="font-family: 'Times New Roman', Times, serif;">Toyota</h2>
            <div class="row">
                <div class="col">
                    <img src="imagenes\toyota_logo.png" class="figure-img img-fluid rounded" alt="Logo" height="150">
                </div>
                <div class="col">
                    <img src="imagenes\Toyota_Corolla.jpg" class="rounded mx-auto d-block" alt="Logo" height="150">
                </div>
                <div class="col">
                    <img src="imagenes\RAV4.png" class="rounded mx-auto d-block" alt="Logo" height="150">
                </div>
                <div class="col">
                    <img src="imagenes\toyota_raize.jpg" class="rounded mx-auto d-block" alt="Logo" height="150">
                </div>
            </div>
            <figcaption class="figure-caption" style="font-family: 'Times New Roman', Times, serif;">Toyota Motor Corporation es una empresa japonesa de fabricación de automóviles. Fundada en 1933 por Kiichiro Toyoda, su sede principal está ubicada en Toyota y Bunkyō aunque, por su carácter multinacional, cuenta con fábricas y sedes en varios países.</figcaption>
        </figure>
        <figure class="figure">
            <h2 style="font-family: 'Times New Roman', Times, serif;">Honda</h2>
                <div class="row">
                    <div class="col">
                        <img src="imagenes\honda_logo.jpg" class="figure-img img-fluid rounded" alt="Logo" height="150">
                    </div>
                    <div class="col">
                        <img src="imagenes\honda_civic.jpg" class="rounded mx-auto d-block" alt="Logo" height="150">
                    </div>
                    <div class="col">
                        <img src="imagenes\honda_sedan.jpg" class="rounded mx-auto d-block" alt="Logo" height="150">
                    </div>
                    <div class="col">
                        <img src="imagenes\honda_crv.jpg" class="rounded mx-auto d-block" alt="Logo" height="150">
                    </div>
                </div>
                <figcaption class="figure-caption" style="font-family: 'Times New Roman', Times, serif;">Honda Motor Co., Ltd., es una empresa de capital abierto de origen japonés fabricante de automóviles, motores para vehículos terrestres, acuáticos y aéreos, motocicletas, robots y demás refacciones para la industria automotriz.</figcaption>
        </figure>
        <figure class="figure">
            <h2 style="font-family: 'Times New Roman', Times, serif;">Porsche</h2>
                <div class="row">
                    <div class="col">
                        <img src="imagenes\porsche_logo.jpg" class="figure-img img-fluid rounded" alt="Logo" height="150">
                    </div>
                    <div class="col">
                        <img src="imagenes\porsche_911.jpg" class="rounded mx-auto d-block" alt="Logo" height="170">
                    </div>
                    <div class="col">
                        <img src="imagenes\porsche_918.jpg" class="rounded mx-auto d-block" alt="Logo" height="170">
                    </div>
                    <div class="col">
                        <img src="imagenes\porsche_gt3rs.jpg" class="rounded mx-auto d-block" alt="Logo" height="170">
                    </div>
                </div>
                <figcaption class="figure-caption" style="font-family: 'Times New Roman', Times, serif;">Es un fabricante de automóviles alemán especializado en automóviles deportivos de lujo de alta gama, vehículos utilitarios deportivos (SUV) y sedanes. Es propiedad del Grupo Volkswagen,5​ que a su vez es propiedad mayoritaria de Porsche Automobil Holding SE. Fue fundada en Stuttgart en 1931 por Ferdinand Porsche y su hijo Ferdinand Anton Ernst Porsche.</figcaption>
        </figure>
        <figure class="figure">
            <h2 style="font-family: 'Times New Roman', Times, serif;">Suzuki</h2>
                <div class="row">
                    <div class="col">
                        <img src="imagenes\suzuki_logo.png" class="figure-img img-fluid rounded" alt="Logo" height="150">
                    </div>
                    <div class="col">
                        <img src="imagenes\suzuki_jimmy.jpg" class="rounded mx-auto d-block" alt="Logo" height="170">
                    </div>
                    <div class="col">
                        <img src="imagenes\suzuki_swift.jpg" class="rounded mx-auto d-block" alt="Logo" height="170">
                    </div>
                    <div class="col">
                        <img src="imagenes\suzuki_ignis.jpg" class="rounded mx-auto d-block" alt="Logo" height="170">
                    </div>
                </div>
                <figcaption class="figure-caption" style="font-family: 'Times New Roman', Times, serif;">Suzuki Motor Corporation, es una empresa pública multinacional japonesa dedicada a la fabricación de automóviles, motocicletas, motores fuera borda y una variedad de productos equipados con motor de combustión interna.</figcaption>
        </figure>
        <figure class="figure">
            <h2 style="font-family: 'Times New Roman', Times, serif;">Nissan</h2>
                <div class="row">
                    <div class="col">
                        <img src="imagenes\nissan_logo.png" class="figure-img img-fluid rounded" alt="Logo" height="150">
                    </div>
                    <div class="col">
                        <img src="imagenes\nissan_gtr.jpg" class="rounded mx-auto d-block" alt="Logo" height="170">
                    </div>
                    <div class="col">
                        <img src="imagenes\nissan_kicks.jpg" class="rounded mx-auto d-block" alt="Logo" height="170">
                    </div>
                    <div class="col">
                        <img src="imagenes\nissan_frontier.jpg" class="rounded mx-auto d-block" alt="Logo" height="170">
                    </div>
                </div>
                <figcaption class="figure-caption" style="font-family: 'Times New Roman', Times, serif;">Nissan Motor Co., Ltd. es un fabricante japonés de automóviles, con base en Nishi-ku. Su nombre común, Nissan, es un acrónimo de "Nippon Sangyo". Está entre las principales compañías automotrices en términos de producción anual de vehículos.</figcaption>
            <h2>Entre otras.</h2>
        </figure>
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