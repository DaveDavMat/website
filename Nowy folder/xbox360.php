<html>
<Head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">    
      <style>
        .okladka{
            width: 200;

        }
    </style>
</Head>
</html>

<?php
$polaczenie = mysqli_connect("localhost", "4f", "", "gry_online2");
mysqli_set_charset($polaczenie, "utf8");

if (!$polaczenie) {
    die("Połączenie nie powiodło się!");
}else{
   $zapytanie = "SELECT g.* FROM gry g inner join gry_has_platformy gh on (g.id=gh.GRY_ID) and gh.Platformy_ID=4;";
$wynik= mysqli_query($polaczenie, $zapytanie);
    }


    if (mysqli_num_rows($wynik) > 0) {

		echo '<table class="w3-table-all">
		<tr>
    <th>Id</th>
    <th>Nazwa</th>
    <th>Gatunek</th>
    <th>Opis</th>
    <th>Data wydania</th>
    <th>Cena</th>
    <th>Okładka</th>

  </tr>';

		while($rekord = mysqli_fetch_assoc($wynik)) {

					echo '<tr>
		<td>'.$rekord['ID'].'</td>
		<td>'.$rekord['Nazwa'].'</td>
		<td>'.$rekord['Gatunek'].'</td>
		<td>'.$rekord['Opis'].'</td>
		<td>'.$rekord['Data_wydania'].'</td>
        <td>'.$rekord['cena'].'</td>
        <td><img class="okladka" src='.$rekord['okladka'].'></td>
		</tr>';
		}
    }
		echo '</table>';
?>
