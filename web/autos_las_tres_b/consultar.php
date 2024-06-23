<?php
include 'db_conection.php';
include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Autos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
        .table-custom {
            margin-top: 20px;
            border-radius: 10px; 
        }
        .table-custom th,
        .table-custom td {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-md-8 mx-auto">
            <h2 class="text-center">Lista de Autos</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-custom">
                    <thead class="table-secondary">
                        <tr>
                            <th>Placa</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Kilometraje</th>
                            <th>Fecha(Año)</th>
                            <th>Precio($)</th>
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
                                    <td><?php echo $row['placa']; ?></td>
                                    <td><?php echo $row['marca']; ?></td>
                                    <td><?php echo $row['modelo']; ?></td>
                                    <td><?php echo $row['kilometraje']; ?></td>
                                    <td><?php echo $row['fecha']; ?></td>
                                    <td><?php echo $row['precio']; ?></td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='6'>No hay autos disponibles</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
