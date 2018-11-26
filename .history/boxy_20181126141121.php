
<?php
$polaczenie = mysqli_connect("localhost", "4f", "", "gry_online2");
mysqli_set_charset($polaczenie, "utf8");

if (!$polaczenie) {
    die("Połączenie nie powiodło się!");
}else{
   $zapytanie = "SELECT * FROM gry";
$wynik= mysqli_query($polaczenie, $zapytanie);
    }
    
    
    if (mysqli_num_rows($wynik) > 0) {
		
	
		
		while($rekord = mysqli_fetch_assoc($wynik)) {
          echo '<div class="row">
        <div class="col-md-4">
        <img class="okladka" src='.$rekord['okladka'].'>
         <h2>Heading</h2>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>';
	
		}
    }
		echo '</div>';
?>

<div class="row">
        <div class="col-md-4">
            echo 
         <h2>Heading</h2>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
    
	
					echo '<tr>
		<td>'.$rekord['ID'].'</td>
		<td>'.$rekord['Nazwa'].'</td>
		<td>'.$rekord['Gatunek'].'</td>
		<td>'.$rekord['Opis'].'</td>
		<td>'.$rekord['Data_wydania'].'</td>
        <td>'.$rekord['cena'].'</td>
        <td><img class="okladka" src='.$rekord['okladka'].'></td>
		</tr>';