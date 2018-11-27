<!doctype html>

<html class="no-js" lang="pl"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>GAMEINFO</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            body {
                
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>
    <body  overflow-y:"scroll;>
     
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">GAMEPEDIA</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
       <?php
                if(isset($_SESSION['loginSuccess'])){
                        if($_SESSION['loginSuccess'] == true){

                                echo " <a href='logout.php' class='button1'>Wyloguj!</a> 
                                <span style='color:red;' class='loggedin'>Witaj, ".$_SESSION["loginName"]."!</span>";


                        }else{ echo '<ul class="nav navbar-nav navbar-right">
      <li><a href="rejestracja.php"><span class="glyphicon glyphicon-user"></span>Rejestracja</a></li>
      <li><a href="logform.php"><span class="glyphicon glyphicon-log-in"></span>Zaloguj</a></li>
    </ul>';
                          }
                }else{
                  echo '<ul class="nav navbar-nav navbar-right">
      <li><a href="rejestracja.php"><span class="glyphicon glyphicon-user"></span>Rejestracja</a></li>
      <li><a href="logform.php"><span class="glyphicon glyphicon-log-in"></span>Zaloguj</a></li>
    </ul>';
                  
                }
                ?>
  </div>
</nav>



        </div>

