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