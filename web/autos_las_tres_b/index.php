<?php
    include 'db_conection.php';
    include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.slim.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-6">
                <img src="imagenes/logo_empresa.png" class="img-fluid mx-auto d-block mb-4" alt="Logo" height="200">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Login</h4>
                        <form action="principal.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username" autofocus required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <input type="submit" class="btn btn-success btn-block" name="login" value="Login">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
