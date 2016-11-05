<h1>Fortsetzen</h1>
	<img></img><!-- Hintergrundbild -->
	
<form>
	<table> <!-- 3 Auswählbare Spielstände sind hier aufgelistet -->
		<tr>
		<th>Datum</th>
		<th>Uhrzeit</th>
		<th>Mitspieler</th>
		<th>An der Reihe:</th>
		<th> </th>

		
		<?php
			$spielstaende = 6; // Anzahl der aktuell offenen Spielpartien
			echo("<table>");
			for ($i =0; $i <$spielstaende; $i++)
			{
				echo("<tr>
					<td>00.00.0000</td> <!-- Datum aus Datenbank -->
					<td>00:00:00</td> <!-- Uhrzeit aus Datenbank -->
					<td>0</td> <!-- Gegneranzahl aus Datenbank -->
					<td>Spielername</td> <!-- Name des aktuellen Spielers aus Datenbank -->
					<td><input type=checkbox id=starten></td>
					</tr>");
			}
			echo("</table>");
		?>
	</table>
</form>
<a href='#' onClick="window.close()"><input type="reset" value="Zurück">
<a href=Spielfeld.php target=spielfeld onClick="window.close() window.open('','spielfeld') "><input type="submit" value= "Weiter"> <!-- Das Popup soll geschlossen und auf der Hauptseite die Spielfeld.php geöffnet werden. So funktioniert das nicht.. -->