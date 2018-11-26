<?php
session_start();
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

var_dump($_SESSION);
                if(isset($_SESSION['loginSuccess'])){
                        if($_SESSION['loginSuccess'] == true){
                                echo "<span style='color:red;'>Witaj, ".$_SESSION["loginName"]."!</span>
                                <a href='logout.php' class='btn btn-default'>WYLOGUJ</a>";

                        }else{
                          foo();}
                }else{
                  foo();
                }
                ?>