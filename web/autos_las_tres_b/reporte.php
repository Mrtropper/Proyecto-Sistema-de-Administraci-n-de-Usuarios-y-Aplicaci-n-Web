<?php
include 'db_conection.php';
include 'includes/header.php';
?>
<body>

<div class="container mt-4">
    <h2 style="font-family: 'Times New Roman', Times, serif;">Reporte</h2>
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
    <div class="col">
        <img src="imagenes\logo_empresa.png" class="rounded mx-auto d-block" alt="Logo" height="400">
    </div>
</div>
</body>