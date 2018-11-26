 <?php
session_start();
$polaczenie = mysqli_connect("localhost", "4f", "", "gry_online2");
mysqli_set_charset($polaczenie, "utf8");

if (!$polaczenie) {
    die("Połączenie nie powiodło się!");
}else{
    $nick = $_POST['nick'];
    $haslo = md5($_POST['haslo']);
    $email = $_POST['email'];
    }
    $zapytanieoemail = "SELECT * FROM uzytkownicy where Email = '$email'";
$rezultatoemail= mysqli_query($polaczenie, $zapytanieoemail);


if (mysqli_num_rows($rezultatoemail) > 0) {
    $_SESSION['EmailError'] = true;
    header('Location: index.php');
}else {
    $zapytanie = "INSERT INTO uzytkownicy (Nick, Haslo, Email)
VALUES ('$nick', '$haslo', '$email')";


if (mysqli_query($polaczenie, $zapytanie)) {
    echo "KONTO ZALOZONE";
    $_SESSION["success"] = true;
    header("Location: index.php");
} else {
    echo "KONTO NIE ZALOZONE";
    $_SESSION["success"] = false;
    header("Location: index.php");
}
}
mysqli_close($polaczenie);
?>