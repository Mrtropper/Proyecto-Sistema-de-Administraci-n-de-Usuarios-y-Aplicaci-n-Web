<?php
    include 'db_conection.php';
    include 'includes/header.php';
?>
<html lang="en">
    <body>
        
    <div class="container text-center">
  <div class="row">
    <div class="col">
    <img src="imagenes\Autos (1).png" class="rounded mx-auto d-block" alt="Logo" height="200">
    
    <div class="card card-body">
                    <form action="pricipal.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" autofocus requiered>
                        </div>
                        <div class="form-group">
                            <input type="text" name="password" class="form-control" placeholder="Password" requiered>
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" requiered>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="login" value="Login">
                    </form>
                </div>
    </body>
    </div>
    
  </div>
</div>
    
</html>