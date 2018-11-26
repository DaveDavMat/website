
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
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/wiedzmin3.jpg" alt="WITCHER" style="width:100%;height:200px;">

      </div>

      <div class="item">
        <img src="img/csgo.jpg" alt="CSGO" style="width:100%;height:200px;">
      </div>

      <div class="item">
        <img src="img/bf.jpg" alt="Battlefield" style="width:100%;height:200px;">
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    <div class="container">
      <!-- Example row of columns -->
      <?php
        require('boxy.php');
        ?>
    </div>

      <?php
        require('foot.php');
        ?>

