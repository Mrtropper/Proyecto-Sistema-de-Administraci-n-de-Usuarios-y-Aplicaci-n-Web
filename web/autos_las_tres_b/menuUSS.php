<?php
include 'db_conection.php';
include 'includes/header.php';
?>
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