<?php
    include 'db_conection.php';
    include 'includes/header.php';
?>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="imagenes/logoLargo.png" class="img-fluid rounded-start" alt="Logo" >
                    </div>
                    <div class="col-md-7">
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
    </div>
</body>

