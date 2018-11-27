<?php
session_start();
require('nav.php');
?>
        <?php
        if(isset($_SESSION["success"])){
                if($_SESSION["success"] == true){
                        echo '
                        <div class="alert alert-success">
                          <strong>GRATULUJEMY!</strong> Konto zostało założone.
                        </div>
                        ';
                        session_unset("success");
                }else{
                        echo '<div class="alert alert-danger">
                          <strong>PRZYKRO NAM!</strong> Konto nie zostało założone.
                        </div>';
                        session_unset("success");
                }
        }
        if(isset($_SESSION["EmailError"])){
                if($_SESSION["EmailError"] == true){
                        echo '
                        <div class="alert alert-danger">
                          <strong>Przkyor nam!</strong> Konto już istnieje.
                        </div>
                        ';
                        session_unset("EmailError");
                }
        }

        ?>

<div class="container">


    <div class="container">
        <form method="POST" action="zaloguj.php" class="box" role="form">
                             <div>
                                 <h1>Login</h1>
                                  <input type="text" placeholder="Adres email" class="form-control" name="email">
                              </div>
                             <div class="form-group">
                                 <input type="password" placeholder="Hasło" class="form-control" name="password">
                             </div>
                             <input type="submit" class="btn" value="Zaloguj się">
                            
                        </form>

    </div>
   
      <?php
        require('foot.php');
        ?>
    



