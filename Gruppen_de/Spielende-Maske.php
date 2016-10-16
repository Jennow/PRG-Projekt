<h3>Grlückwusch!!! / Leider verloren.. </h3> <!-- Je nachdem ob Spieler gewonnen hat oder nicht -->
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

 <a href=Neues_Spiel.php><button type=button>Neues Spiel </button>
 <a href=Hauptmenu.php>Hauptmenü</a>
  <button type=button>Spiel beenden </button>
 