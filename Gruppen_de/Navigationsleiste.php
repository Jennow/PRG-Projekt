<nav>
	<img></img><!-- Hintergrundbild -->
	<p>Name</p><!-- Spieler, der an der Reihe ist-->
	<table>
		<tr> 
			<th> Geld </th>
			<th> Siegpunkte </th>
		</tr>
		<tr> 
			<td> 00000 </td>
			<td> 00000 </td>
		</tr>
	</table>
	
	<?php
		$anzahlItems = 4; // Spieleranzahl aus Datenbank
		echo("<table>");
		for ($i =0; $i <$anzahlItems; $i++)
			{
			echo"<tr>
			<td>username<td>
			<td><p style=color:lightblue;>0</td>
			<td><p style=color:blue;>0</td>
			<td><p style=color:purple;>0</td>
			<td><p style=color:pink;>0</td>
			<td><p style=color:red;>0 </td>        <!-- Farbe steht jeweils für die zugehörige Airline -->
			<td><p style=color:orange;>0</td>
			<td><p style=color:yellow;>0</td>
			<td><p style=color:green;>0</td>
			<td><p style=color:brown;>0</td>
			<td><p style=color:grey;>0</td>
			<td><p style=color:black;>0</td>
			";
		}
		echo("</table>");
	?>
	<details>
			<summary>Einstellungen</summary>
			<iframe src=Einstellungen.php></iframe>
			</details>
			<br>
	<details>
		<summary>Spielregeln</summary>
		<iframe src=Regelwerk-Maske.php></iframe>
	</details>

	  <a href=Aktienmarkt.php>Aktienmarkt</a> |
	  <a href=Aktionsmenu.php>Aktionsmenü</a> |

</nav>