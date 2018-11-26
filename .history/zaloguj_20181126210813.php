<?php
session_start();
$polaczenie = mysqli_connect("localhost", "root", "", "gry_online2");
mysqli_set_charset($polaczenie, "utf8");
if (!$polaczenie) {
    die("Błąd połączenia z BAZĄ! : " . mysqli_connect_error());
}
 
$email = $_POST["email"];
$password = md5($_POST["password"]);
 
$sql = "SELECT * FROM uzytkownicy WHERE Email = '$email' AND Haslo = '$password';";
 var_dump($sql);
$rezultat = mysqli_query($polaczenie, $sql);
 
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

