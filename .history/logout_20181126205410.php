<?php


session_start();

$_SESSION = array();

session_destroy();

header('Location: index.php');


?>




 /* 
               if(isset($_SESSION["loginSuccess"])){
                        if($_SESSION["loginSuccess"] == true){
                             echo "<span style='color: white;'>Witaj, ". $_SESSION["loginName"] ."!</span>
                                <a href='logout.php' class='btn btn-default'>WYLOGUJ</a>

                                ";
                        }
                }else{
                        echo '<form method="POST" action="login.php" class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Adres email" class="form-control" name="email">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Hasło" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-success">Zaloguj się</button>
                        <a href="rejestracja.php" class="btn btn-default">Rejestracja</a>
          </form>';
                }
                ?>


login porpawiony:
<?php
session_start();
$conn = mysqli_connect("localhost", "pizzeria", "pizzeria", "pizzeria");
mysqli_set_charset($conn, "utf8");
if (!$conn) {
    die("Błąd połączenia z BAZĄ! : " . mysqli_connect_error());
}
 
$email = $_POST["email"];
$password = md5($_POST["password"]);
 
$sql = "SELECT * FROM uzytkownicy WHERE email = '$email' AND haslo = '$password';";
 
$rezultat = mysqli_query($conn, $sql);
 
if( mysqli_num_rows($rezultat) > 0 ){
        $_SESSION["loginSuccess"] = true;
        $informacjeOUzytkowniku = mysqli_fetch_assoc($rezultat);
        $_SESSION["loginUserID"] = $informacjeOUzytkowniku['id'];
        $_SESSION["loginName"] = $informacjeOUzytkowniku['imie'];
        header("Location: index.php");
}else{
        $_SESSION["loginSuccess"] = false;
        header("Location: index.php");
}
 