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
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>
    <body  overflow-y:"scroll;>
     
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      
      <div class="container">
          
        <div class="navbar-header">

          <a class="navbar-brand" href="index.php">GAMEINFO</a>
          
            



        </div>

         <?php
function foo(){
  $txt= '<form method="POST" action="zaloguj.php" class="navbar-form navbar-right" role="form">
                             <div class="form-group">
                                  <input type="text" placeholder="Adres email" class="form-control" name="email">
                              </div>
                             <div class="form-group">
                                 <input type="password" placeholder="Hasło" class="form-control" name="password">
                             </div>
                             <button type="submit" class="btn btn-success">Zaloguj się</button>
                             <a href="rejestracja.php" class="btn btn-default">Rejestracja</a>
                        </form>';
  echo $txt;
}

                if(isset($_SESSION['loginSuccess'])){
                        if($_SESSION['loginSuccess'] == true){

                                echo " <a href='logout.php' class='button1'>Wyloguj!</a> 
                                <span style='color:red;' class='loggedin'>Witaj, ".$_SESSION["loginName"]."!</span>";


                        }else{
                          foo();}
                }else{
                  foo();
                }
                ?>

      </div>  </nav>