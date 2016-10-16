<h3>Wertungsrunde 1/2/3</h3>
<img></img><!-- Hintergrundbild -->	

<?php
	$anzahlMitspieler = 5; // Wert aus Datenbank

	echo("<table>");
	for ($i =0; $i <$anzahlMitspieler; $i++)
	{
		$j=$i+1;
		echo("<tr>
			<td>$j.</td>
			<td>Name<td><!-- Name des jew. Spielers -->
			<td>0 SP</td> <!-- Anzahl der Siegpunkte -->
			<td>0 Air Abacus Aktie</td> <!-- Anzahl der AA Aktien -->
			</tr>");
	}
	echo("</table>");		
?>