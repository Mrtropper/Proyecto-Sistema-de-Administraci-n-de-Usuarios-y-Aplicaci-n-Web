<?php
       include 'db_conection.php';
?>
<h1> entro</h1>
<?php
        
         if ($_SERVER['REQUEST_METHOD']=="POST") {
            $username=$_POST['username'];
            empezar($username);
        }
        function empezar($username){
            global $pdo;
            $sql="SELECT * FROM tb_usuarios WHERE username = :username";
            
            $stmt=$pdo->prepare($sql);
            $stmt->bindParam(':username',$username);
            $stmt->execute();
            $uss=$stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($uss['profile'] =="Admin") {
                ?>
                    <h1> entro</h1>
                <?php
                }else {
                    ?>
                        <h1> no entro</h1>
                    <?php
                }        
        }

    
?>