
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
        <div id="login-box">
  <div class="left">
    <h6 class="login__header">Sign up</h6>
    
    <input type="text" name="nick" placeholder="Username" />
    <input type="text" name="email" placeholder="E-mail" />
    <input type="password" name="password" placeholder="Password" />
    
    <input type="submit" name="signup_submit" value="Sign me up" />
  </div>
  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>
</div>

    </div>
   
      <?php
        require('foot.php');
        ?>