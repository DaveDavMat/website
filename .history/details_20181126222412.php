
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

 <div style="float: left">
     <a href="pc.php"><h3>PC</h3></a>
     <a href="ps3.php"><h3>PS3</h3></a>
     <a href="ps4.php"><h3>PS4</h3></a>
     <a href="xbox360.php"><h3>XBOX 360</h3></a>
     <a href="xboxone.php"><h3>XBOX ONE</h3></a>

</div>

<div class="container">
    <h2>Grafiki</h2>
<?php require('carousel.php');?>
    <div class="container">
      <!-- Example row of columns -->

    </div>
   
      <?php
        require('foot.php');
        ?>
    