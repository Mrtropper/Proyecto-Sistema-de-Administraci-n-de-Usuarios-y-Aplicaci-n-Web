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
            
                if ($uss['profile'] =="AdminWeb") {
                    ?>
                        <meta http-equiv="refresh" content="0; URL=menuAdmin.php" />
                    <?php
                }else {
                    ?>
                        <meta http-equiv="refresh" content="0; URL=menuUSS.php" />
                    <?php
                }        
            }else {
                ?>
                    <h1>  incorrect password</h1>
                <?php 
            }
        }
?>