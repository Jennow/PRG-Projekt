
			<h1>Bestenliste</h1>
			<form>
				<input type= search name="suchen" ><input type=submit value=Suchen>
			 </form>
			
			<!-- Auflistung aller Spieler, sortiert nach Siegpunkten -->
			<?php
					$spielerGes = 100; // Wert aus Datenbank
					
					echo("<table>");
					for ($i =0; $i <$spielerGes; $i++)
					{
						$j=$i+1;
						echo("<tr>
								<td>$j.</td>
								<td>Name<td><!-- Nutzername aus Datenbank -->
								<td>00000</td> <!-- Siegpunkt Durchschnitt aus Datenbank -->
								<td>000000 Mio.</td> <!-- Siegpunkte Gesamt aus Datenbank -->
								<td><button id=hinzuf label=hinzuf>+</button></td>
							</tr>");
					}
					echo("</table>");
			?>
			
			<a href=Hauptmenu.php><input type="button" value="Zurück">
			
		