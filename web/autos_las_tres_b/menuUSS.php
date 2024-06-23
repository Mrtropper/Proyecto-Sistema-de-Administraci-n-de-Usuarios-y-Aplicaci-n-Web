<?php
include 'db_conection.php';
include 'includes/header.php';
?>
<body>
    
<div class="container mt-4">
<div class="container text-center">
            <div class="row">
                <div class="col">
                    <img src="imagenes\logo_empresa.png" class="rounded mx-auto d-block" alt="Logo" height="400">
                </div>
                <div>
                   <a href="menuUSS.php" target="_blank" class="btn btn-success">Generar Reporte</a>
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
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <h4 class="mb-0">Listado de Autos</h4>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Placa</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Kilometraje</th>
                            <th>Fecha (Año)</th>
                            <th>Precio ($)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tb_autos";
                        $stmt = $pdo->query($sql);
                        if ($stmt->rowCount() > 0) {
                            while ($row = $stmt->fetch()) {
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['placa']); ?></td>
                            <td><?php echo htmlspecialchars($row['marca']); ?></td>
                            <td><?php echo htmlspecialchars($row['modelo']); ?></td>
                            <td><?php echo htmlspecialchars($row['kilometraje']); ?></td>
                            <td><?php echo htmlspecialchars($row['fecha']); ?></td>
                            <td><?php echo htmlspecialchars($row['precio']); ?></td>
                        </tr>
                        <?php
                            }
                        } else {
                        ?>
                        <tr>
                            <td colspan="6" class="text-center">No hay autos disponibles</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>