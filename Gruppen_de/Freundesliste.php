<h1>Freundesliste</h1>
			<input type= search name="suchen"><input type=submit value=Suchen>
			<table> <!-- Auflistung aller Spieler, sortiert nach Siegpunkten --></table>
			
			<?php
					$spielerFre = 20; // Wert aus Datenbank
				
					echo("<table>");
					for ($i =0; $i <$spielerFre; $i++)
					{
						$j=$i+1;
						echo("<tr>
								<td>$j.</td>
								<td>Name<td><!-- Nutzername aus Datenbank -->
								<td>00000</td> <!-- Siegpunkt Durchschnitt aus Datenbank -->
								<td>000000 mio.</td> <!-- Siegpunkte Gesamt aus Datenbank -->
								<td><button id=hinzuf label=hinzuf>x</button></td>
							</tr>");
					}
					echo("</table>");
		
			?>
			
			<a href=Hauptmenu.php><input type="reset" value="Zurück">
			