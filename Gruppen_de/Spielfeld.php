<h2>Nutzername<h2>
<img></img><!-- Karte Europas-->	
<?php
		$staedte = 30; // 30 Schaltfl�chen stehen f�r St�dte (Sollen irgendwann mal auf dem Bild der Europakarte verteilt werden)
		$strecken = 5; // Je nachdem, wie viele St�dte neben der ausgew�hlten Stadt liegen, desto mehr Strecken sind verf�gbar (Datenbank)
		
	
		echo("<table>");
		for ($i =0; $i <$staedte; $i++)
		{
			$j=$i+1;
			echo("<tr>
					<td> 
						<details> 
							<summary>Stadtname</summary> <!--Werte aus Datenbank-->
							<table>");
							for ($k =0; $k <$strecken; $k++)
							{
								$l=$k+1;
								echo("<tr>
									<td> <details> <summary>StreckenName </summary> 
										<iframe src=Streckenlizenzen-Maske.php height=200 width=150></iframe>
									</td>
								</tr>");
							}
							echo("</table>
						</details>
					<td>
				</tr>");
		}
		echo("</table>");
?>
			
			