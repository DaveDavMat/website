<?php
session_start();
require('nav.php');
?>
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


