
<?php
$polaczenie = mysqli_connect("localhost", "root", "", "gry_online2");
mysqli_set_charset($polaczenie, "utf8");

if (!$polaczenie) {
    die("Połączenie nie powiodło się!");
}else{
   $zapytanie = "SELECT * FROM gry";
$wynik= mysqli_query($polaczenie, $zapytanie);
    }


    if (mysqli_num_rows($wynik) > 0) {


      echo  '<div class="row" >';
		while($rekord = mysqli_fetch_assoc($wynik)) {
          echo '
        <div class="col-md-4" >
        <img class="okladka" src='.$rekord['okladka'].'>
         <h2>'.$rekord['tytul'].'</h2>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>';

		}
    }
		echo '</div>';
?>

