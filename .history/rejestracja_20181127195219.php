
<form method="POST" action="register.php">
<b>Nick:</b> <input type="text" name="nick"><br><br>
<b>Hasło:</b> <input type="password" name="haslo"><br>
<b>Email:</b> <input type="email" name="email"><br>
<button type="submit" name="rejestruj">Rejestruj</button>
</form>



<div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    
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