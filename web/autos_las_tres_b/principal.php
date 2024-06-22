<?php
include 'db_conection.php';
include 'includes/header.php';
?>
<?php
        if ($_SERVER['REQUEST_METHOD']=="POST") {
            $username=$_POST['username'];
            $password=$_POST['password'];
            empezar($username,$password);
        }
        function empezar($username,$password){
            global $pdo;
            $sql="SELECT * FROM tb_usuarios WHERE username = :username";
            
            $stmt=$pdo->prepare($sql);
            $stmt->bindParam(':username',$username);
            $stmt->execute();
            $uss=$stmt->fetch(PDO::FETCH_ASSOC);
            if ($uss['password'] == $password) {
            
                if ($uss['profile'] =="Admin") {
                    ?>
                            <section class="container p-3">
                                <article class="row">
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
                                    <div class="row">
                                        <div class="col">
                                            <img src="imagenes\hilux.jpg" class="rounded mx-auto d-block" alt="Logo" height="400">
                                        </div>
                                    </div>
                                    <
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
                                        <h2>Entre otras.</h2>
                                    </figure>
                                        <div class="col-md-8" style="font-family: 'Times New Roman', Times, serif;">
                                        <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Placa</th>
                                                        <th>Marca</th>
                                                        <th>Modelo</th>
                                                        <th>Kilometraje</th>
                                                        <th>Fecha</th>
                                                        <th>Precio</th>
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
                                                    <td><?php echo $row['fecha'];?></td>
                                                    <td><?php echo $row['precio'];?></td>
                                                    <td>
                                                        <a href="editar_autos.php?id=<?php echo $row['placa'];?>" class="btn btn-secondary">Editar</a>
                                                        <a href="eliminar_autos.php?id=<?php echo $row['placa'];?>" class="btn btn-danger">Eliminar</a>
                                                    </td>                            
                                                </tr>
                                                <?php }} ?>
                                                </tbody>
                                        </table>
                                    </div>
                                </article>
                            </section>
                    <?php
                }else {
                    ?>

                    <?php
                }        
            }else {
                ?>
                    <h1>  incorrect password</h1>
                <?php 
            }
        }

    
?>