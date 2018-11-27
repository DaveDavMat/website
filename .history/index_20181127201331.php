
<?php

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
    
<?php require('carousel.php');?>
    <div class="container">

      <?php
        require('boxy.php');
        ?>
    </div>

      <?php
        require('foot.php');
        ?>

