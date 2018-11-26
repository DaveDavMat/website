<?php
session_start();
$polaczenie = mysqli_connect("localhost", "root", "", "gry_online2");
mysqli_set_charset($polaczenie, "utf8");

if (!$polaczenie) {
    die("Połączenie nie powiodło się!");
}

$email = $_POST['email'];
$haslo = md5($_POST['haslo']);

$sql = "SELECT * FROM uzytkownicy WHERE Email = '$email' AND Haslo = '$haslo'";
$rezultat= mysqli_query($polaczenie, $sql);

if(mysqli_num_rows($rezultat)>0){
   $_SESSION['loginSuccess'] = true;
    $informacjeOUzytkowniku = mysqli_fetch_assoc($rezultat);
    $_SESSION['loginUserID'] = $informacjeOUzytkowniku['ID'];
    header("Location: index.php");

}else{
    $_SESSION['loginSuccess'] = false;
    header("Location: index.php");
}

var_dump($rezultat);
?>

